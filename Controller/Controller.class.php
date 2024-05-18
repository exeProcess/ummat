<?php
    include_once "config.php";
    include_once "Session.php";
    include_once "Database.php";


    class Controller
    {
        private $eventTable = EVENT_TABLE;
        private $donationTable = DONATION_TABLE;
        private $inboxTable = INBOX_TABLE;
        private $outboxTable = OUTBOX_TABLE;
        private $connection;
        public $data;
        public $files;
        public $fileNames = "";
        public $error = [];
        public $success = [];

        public function __construct($db)
        {
            $this->connection = $db;
        }

        public function setData($data)
        {
            $this->data = $data;
        }
        public function setFile($file)
        {
            $this->files = $file;
        }
        public function setFileName($name){
            $this->fileNames = $name;
        }
        

        public function add_category()
        {
            $query_cat = "SELECT 
                        * 
                    FROM "
                        .$this->categoryTable." 
                    WHERE 
                        category = :category 
                    AND 
                        parent = 0";
            $prep_cat_query = $this->connection->prepare($query_cat);
            $prep_cat_query->bindValue(':category',$this->data['category']);
            $prep_cat_query->execute();
            $parent = $prep_cat_query->fetch();
            if($prep_cat_query->rowCount() == 0)
            {
                $sql = "INSERT INTO "
                        .$this->categoryTable."
                        (category) 
                    VALUE
                        (:category)";
                $prep_cat_query = $this->connection->prepare($sql);
                $prep_cat_query->bindValue(':category',$this->data['category']);
                $exec = $prep_cat_query->execute();
                $query_cat = "SELECT
                            * 
                        FROM "
                            .$this->categoryTable."
                        WHERE 
                            category = :category 
                        AND 
                            parent = 0";
                $prep_cat_query = $this->connection->prepare($query_cat);
                $prep_cat_query->bindValue(':category',$this->data['category']);
                $prep_cat_query->execute();
                $parent = $prep_cat_query->fetch();
            }
            $this->data['category'] = $parent['id'];
            //////////Insert portfolio
            $query_child = "SELECT 
                            * 
                        FROM "
                            .$this->categoryTable."
                        WHERE 
                            category = ? 
                        AND 
                            parent = ? ";
            $prep_child_query = $this->connection->prepare($query_child);
            $prep_child_query->execute([$this->data['portfolio'],$parent['id']]);
            $child = $prep_child_query->fetch();
            if($prep_child_query->rowCount() == 0)
            {
                $sql = "INSERT INTO "
                        .$this->categoryTable."
                        (category,parent) 
                    VALUES 
                        (?,?)";
                $stmt = $this->connection->prepare($sql);
                $exec = $stmt->execute([$this->data['portfolio'],$parent['id']]);
                $query_cat = "SELECT 
                            * 
                        FROM "
                            .$this->categoryTable." 
                        WHERE 
                            category = ? 
                        AND 
                            parent = ?";
                $prep_child_query = $this->connection->prepare($query_cat);
                $prep_child_query->execute([$this->data['portfolio'],$parent['id']]);
                $child = $prep_child_query->fetch();
            }
            $this->data['portfolio'] = $child['id'];
        }
        public function upload_image()
        {
            $name = $this->files['photo']['name'];
            $size = $this->files['photo']['size'];
            $tmp_name = $this->files['photo']['tmp_name'];
            $type = $this->files['photo']['type'];
            $formats = ['jpg','jpeg','png'];
            $db_path = "";
            // for($i = 0;$i < count($name);$i++)
            // {
                $ext = explode('/',$type);
                $actExt = end($ext);
                if(!in_array($actExt,$formats))
                {
                    $this->error[] = "Image format not allowed";
                }
                if($size > 101010101)
                {
                    $this->error[] = "File too large";
                
                }
                if(empty($this->error))
                {
                    $file_name = sha1(microtime()).'.'.$actExt;
                    $dir = $_SERVER['DOCUMENT_ROOT'].'/ummat/Admin/Uploads/'.$file_name;
                    $db_path = '/ummat/Admin/Uploads/'.$file_name;
                    move_uploaded_file($tmp_name,$dir);
                }
            //}
            $this->fileNames .= $db_path;
        }
        public function update_image($id,$index)
        {
           $name = $this->files['name'];
           $type = $this->files['type'];
           $size = $this->files['size'];
           $format = ['jpg','jpeg','png'];
           $tmp = $this->files['tmp_name'];
           $ext = explode('.',$name);
           $actExt = strtolower(end($ext));
           $file_name = sha1(microtime()).".".$actExt;
           $upload_name = '/E-shop/View/Admin/Uploads/'.$file_name;
           $dir = $_SERVER['DOCUMENT_ROOT']."/E-shop/View/Admin/Uploads/".$file_name;
           if($size > 101010101)
           {
               $this->error[] = "File too large";
           }
           if(!in_array($actExt,$format))
           {
               $this->error[] = "Image Format not allowed";
           }
           if(empty($this->error))
           {
               move_uploaded_file($tmp,$dir);
               $entry = $this->select_this($id);
               $image = explode(',',$entry['photo']);
               $image[$index] = $upload_name;
               $sequel = "UPDATE "
                        .$this->productTable."
                    SET 
                        photo = ? 
                    WHERE 
                        id = ?";
               $stmt = $this->connection->prepare($sequel);
               $stmt->execute([implode(',',$image),$id]);
               echo $upload_name;
            }
        }
        public function delete_image($id,$index)
        {
            $data = $this->select_this($id);
            $photo = explode(',',$data['photo']);
            unset($photo[$index]);
            $sequel = "UPDATE "
                    .$this->productTable." 
                SET 
                    photo =:photo 
                WHERE 
                    id =:id";
            $stmt = $this->connection->prepare($sequel);
            $stmt->bindValue(':photo',implode(',',$photo));
            $stmt->bindValue(':id',$id);
            $exec = $stmt->execute();
            if($exec){
                echo "removed";
            }else{
                echo "something went wrong";
            }
        }
        public function validate()
        {
            $this->add_brand();
            $this->add_category();
        }
        public function add()
        {
            $this->validate();
            $this->data['photo'] = $this->fileNames;
                $query_keys = implode(',',array_keys($this->data));
                $query_values = implode(', :',array_keys($this->data));
                $query = "INSERT INTO 
                            products($query_keys) 
                        VALUES
                            (:".$query_values.")";
                $prep_stmt = $this->connection->prepare($query);
                foreach($this->data as $key => $value)
                {
                    $prep_stmt->bindValue(":".$key,$value);
                }
                $exec = $prep_stmt->execute();
                if($exec)
                {
                    header('Location: pages/data-tables.php');
                }
        }
        public function selectAll($table, $deleted=0)
        {
            $select_query = "SELECT 
                            * 
                        FROM 
                            $table WHERE 
                    deleted = $deleted";
            $stmt = $this->connection->query($select_query);
            $data = $stmt->fetchAll();
            return $data;
        }
       
        public function select_this($id, $table)
        {
            $query = "SELECT 
                    * 
                FROM 
                    $table 
                WHERE 
                    id=:id";
            $prep_stmt = $this->connection->prepare($query);
            $prep_stmt->bindValue(':id',$id);
            $prep_stmt->execute();
            $result = $prep_stmt->fetch();
            $result['status'] = 200;
            echo json_encode($result);
        }  
        public function update($id, $table)
        {
            if(!empty($this->fileNames)){
                $this->data['photo'] = $this->fileNames;
            }
            $st = "";
            foreach ($this->data  as $key => $value) 
            {
                $st .= "$key = :".$key.", ";
            }
            $sql = "UPDATE
                    $table
                SET 
                    ".rtrim($st,', ')." 
                WHERE 
                    id = ".$id;
            $stmt = $this->connection->prepare($sql);
            foreach ($this->data as $key => $value) 
            {
                # code...
                $stmt->bindValue(":".$key,$value);
            }
            $exec = $stmt->execute();
            if($exec)
            {
                $response = [
                    "status" => 200,
                    "text" => "Event Update Successfully"
                ];
                echo json_encode($response);
                return;
            }
        }
        public function delete_this($id, $table)
        {
            $sequel = "UPDATE 
                    $table 
                SET 
                    deleted = 1 
                WHERE 
                    id=?";
            $stmt = $this->connection->prepare($sequel);
            $exec = $stmt->execute([$id]);
            if($exec)
            {
                $response = [
                    "status" => 200,
                    "text" => "Data deleted successfully"
                ];
                echo json_encode($response);
                return;
            }
        }
        public function display_error()
        {
            $response = [
                "status" => 500,
                "text" => $this->error
            ];
            echo json_encode($response);
            return;
        }
        public function addUser()
        {
            if(!empty($this->error))
            {
                echo $this->display_errors();
            }
            $keys = implode(',',array_keys($this->data));
            $values = implode(', :',array_keys($this->data));
            $sequel = "SELECT 
                    * 
                FROM 
                    user 
                WHERE 
                    email = ?";
            $stmt = $this->connection->prepare($sequel);
            $stmt->execute([$this->data['email']]);
            if($stmt->rowCount() > 0)
            {
                $response = [
                    "status" => 500,
                    "text" => "User with this email already exist"
                ];
                echo json_encode($response);
                return;
            }else
            {
                $sequel = "INSERT INTO 
                        user ($keys) 
                    VALUES 
                        (:".$values.")";
                $stmt = $this->connection->prepare($sequel);
                foreach ($this->data as $key => $value)
                {
                    # code...
                    $stmt->bindValue(":".$key,$value);
                }
                $exec = $stmt->execute();
                if($exec)
                {
                    // header('Location: ../../../index.php');
                    $response = [
                        "status" => 200,
                        "text" => "success"
                    ];
                    echo json_encode($response);
                }
            }
        }
        public function login()
        {
            $sequel = "SELECT 
                        * 
                    FROM 
                        user 
                    WHERE 
                        email = ?";
            $stmt = $this->connection->prepare($sequel);
            $stmt->execute([$this->data['email']]);
            $result = $stmt->fetch();
            if($stmt->rowCount() == 0)
            {
                $response = [
                    "status" => 500,
                    "text" => "User not found",
                ];
                echo json_encode($response);
                return;
            }
            if(!empty($this->error))
            {
                echo $this->display_errors();    
            }else
            {
                if(!password_verify($this->data['password'],$result['password']))
                {
                    // $this->error[] = "Password does not match our record.Try again";
                    $response = [
                        "status" => 500,
                        "text" => "Password does not match our record.Try again",
                    ];
                    echo json_encode($response);
                    return;
                }
                Session::start();
                Session::set('user',$result);
                $response = [
                    "status" => 200,
                    "text" => "success",
                    "user" => Session::get('user')
                ];
                echo json_encode($response);
            }
        }
        static public function is_logged_in()
        {
            if(isset($_SESSION['user']) && !empty($_SESSION['user']))
            {
                return true;
            }
            return false;
        }
        public static function login_error_redirect($url)
        {
            Session::set('error_flash','You have no permission to this page');
            if(isset($_SESSION['user']))
            {
                unset($_SESSION['error_flash']);
            }
            header('Location: '.$url);
        }
        public static function logOut()
        {
            if(isset($_SESSION['user']))
            {
                Session::destroy();
            }
            header("Location: ../View/index.php");
        }
        public function add_event(){
            //$cart_data = $this->select_this($id);
            $key = [];
            $value = [];
            $this->data['photo'] = $this->fileNames;
            //$cart_table = "user_".Session::get('user_id')['id'];
            $field = ['title','location','date_time','topic','photo'];
            for($i = 0;$i < count($field);$i++){
                if(in_array($field[$i],array_keys($this->data))){
                    $index = $field[$i];
                    $key[] =  $field[$i];
                    $value[] = $this->data[$index];
                }
            }
            $keys = implode(',',$key);
            $values = implode(', :',$key);
            $table = $this->eventTable;
            $sequel = "INSERT INTO 
                        $table($keys) 
                    VALUES
                        (:".$values.")";
            $stmt = $this->connection->prepare($sequel);
            for($i = 0;$i < count($key);$i++){
                $stmt->bindValue(':'.$key[$i],$value[$i]);
            }
            $exec = $stmt->execute();
            if($exec){
                $response = [
                    "status" => 200,
                    "text" => "success"
                ];
                echo json_encode($response);
            }
        }
        public function add_donation(){
            //$cart_data = $this->select_this($id);
            $key = [];
            $value = [];
            $field = ['reason','target_amount','realized_amount'];
            for($i = 0;$i < count($field);$i++){
                if(in_array($field[$i],array_keys($this->data))){
                    $index = $field[$i];
                    $key[] =  $field[$i];
                    $value[] = $this->data[$index];
                }
            }
            $keys = implode(',',$key);
            $values = implode(', :',$key);
            $table = $this->donationTable;
            $sequel = "INSERT INTO 
                        $table($keys) 
                    VALUES
                        (:".$values.")";
            $stmt = $this->connection->prepare($sequel);
            for($i = 0;$i < count($key);$i++){
                $stmt->bindValue(':'.$key[$i],$value[$i]);
            }
            $exec = $stmt->execute();
            if($exec){
                $response = [
                    "status" => 200,
                    "text" => "success"
                ];
                echo json_encode($response);
            }
        }
        public function sendMail(){
            //$cart_data = $this->select_this($id);
            $key = [];
            $value = [];
            $field = ['recipient_name','recipient_email','message'];
            for($i = 0;$i < count($field);$i++){
                if(in_array($field[$i],array_keys($this->data))){
                    $index = $field[$i];
                    $key[] =  $field[$i];
                    $value[] = $this->data[$index];
                }
            }
            $keys = implode(',',$key);
            $values = implode(', :',$key);
            $table = $this->outboxTable;
            $sequel = "INSERT INTO 
                        $table($keys) 
                    VALUES
                        (:".$values.")";
            $stmt = $this->connection->prepare($sequel);
            for($i = 0;$i < count($key);$i++){
                $stmt->bindValue(':'.$key[$i],$value[$i]);
            }
            $exec = $stmt->execute();
            if($exec){
                $response = [
                    "status" => 200,
                    "text" => "success"
                ];
                echo json_encode($response);
            }
        }
    }

?>