<?php
  include_once "../../../Controller/Controller.class.php";
  include_once "../../../Controller/Database.php";
  $dbh = new Database;
  $db = $dbh->connect();
  $ctrl = new Controller($db);
  if(!$ctrl::is_logged_in()){
    $ctrl::login_error_redirect("../form/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="cursor:;"></a> -->
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/log.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Al Ummah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Muslim Ummah Foundation</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="../../index.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Events
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="donations.php" class="nav-link active">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Donations
                    <!-- <i class="fas fa-angle-left right"></i> -->
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/mailbox.php" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <!-- <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../mailbox/mailbox.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inbox</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../mailbox/compose.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Compose</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../mailbox/read-mail.html" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read</p>
                    </a>
                  </li>
                </ul> -->
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Donations Board</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Donation</h3>
    
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    
                    
                    <input type="hidden" name="" id="edit-id">
                    <div class="form-group">
                      <label for="target">Target amount</label>
                      <input type="email" class="form-control" id="target" placeholder="Enter Donation Target e.g 1,000,000">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <label>Reason For Donation</label>
    
                      <textarea id="summernote">
                        
                      </textarea>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form-group -->
                    
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <button type="submit" class="btn btn-primary col start" id="submit_donation" onclick="post(this.id)">
                  <i class="fas fa-upload"></i>
                  <span>Post Donation</span>
                </button>
                <button class="btn btn-primary col start d-none" id="update_donation" onclick="post(this.id)">
                  <i class="fas fa-upload"></i>
                  <span>Update Donation</span>
                </button>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of past & upcoming events</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                $dbClass = new Database();
                $db = $dbClass->connect();
                $ctrl = new Controller($db);
                $donations = $ctrl->selectAll("donation")
              ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>Donation</th>
                        <th>Target</th>
                        <th>Raised</th>
                        <th>Actions</th>
                      </tr>  
                  </thead>
                  <tbody>
                      <?php
                        foreach($donations as $donation):
                      ?>
                      <tr id="row-<?= $donation['id']?>">
                        <td><?= $donation['reason']?></td>
                        <td><?= $donation['target_amount']?></td>
                        <td><?= $donation['realized_amount']?></td>
                        
                        <td class="d-flex justify-content-between">
                          <a href="#" class="text-success" id="edit-<?= $donation['id']?>" onclick="edit(this.id)"><i class="fa fa-solid fa-pen"></i></a>
                          <a href="#" class="text-danger" id="<?= $donation['id']?>" onclick="get(this.id)"><i class="fa fa-solid fa-trash"></i></i></a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });

  let edit = (id) => {
    $("#update_event").html('<i class="fa fa-sync fa-spin">')
    let dataId = id.split("-")[1]
    let data = {
      id: dataId,
      getEdit: true,
      table: "donation"

    }
    $.ajax({
      url: '../../../Controller/requestHandler.php',
      method: 'POST',
      data: data,
      success: (res) => {
        let result = JSON.parse(res)
        $("#summernote").html(result.reason),
        $("#target").val(result.target_amount),
        
        $("#edit-id").val(result.id),
        $("#update_donation").html(`<i class="fas fa-upload"></i>
                      <span>Update Event</span>`).removeClass("d-none").addClass("d-block");

        $("#submit_donation").addClass("d-none")
        console.log(result.title)
        
      }
    })
  }
  let get = (id) =>{
    let data = {
      id: id,
      delete: true,
      table: "donation"
    }
    $.ajax({
      url: '../../../Controller/requestHandler.php',
      method: 'POST',
      data: data,
      success: (res) => {
        let result = JSON.parse(res)
        if(result.status == 200){
          let row = $(`#row-${id}`);
          row.remove();

          // table.prepend(`
          // <tr>
          //                 <td>${data.title}</td>
          //                 <td>${data.location}</td>
          //                 <td>${time}</td>
          //                 <td>${date}</td>
          //                 <td>${data.topic}</td>
          //                 <td>
          //                   <a href="">edit</a>
          //                 </td>
          //               </tr>
          // `)
          //console.log(res);
        }
        
        
      }
    })
  }
  
  let post = (id) => {
    //e.preventDefault()
    if(id == "submit_donation"){
      $("#submit_donation").html('<i class="fa fa-sync fa-spin">')
    }else{
      $("#update_donation").html('<i class="fa fa-sync fa-spin">')
    }
    let data = {
      reason: $("#summernote").val(),
      target: $("#target").val()
    }
    let formdata = new FormData();
    if(data.reason == " " || data.target == " "){
      $("#submit_donation").html(`<i class="fas fa-upload"></i>
                  <span>Post Donation</span>`)
      toastr.error("All feilds are required")
      return;
    }
    formdata.append('reason',$("#summernote").val())
    formdata.append('target',$("#target").val());
    if(id == "submit_donation"){
      formdata.append('submit_donation', true)
    }
    if(id == "update_donation"){
      formdata.append('id',$("#edit-id").val());
      formdata.append('edit_donation', true)
    }
   
    $.ajax({
      url: '../../../Controller/requestHandler.php',
      method: 'POST',
      data: formdata,
      cache : false,
      contentType : false,
      processData : false,
      success: (res) => {
        let result = JSON.parse(res)
        if(result.status == 200){
          // let table = $("#table-body");
          // let date = data.date.split(" ")[0]
          // let time = data.date.split(" ")[1]

          // table.prepend(`
          // <tr>
          //                 <td>${data.reason}</td>
          //                 <td>${data.location}</td>
          //                 <td>${time}</td>
          //                 <td>${date}</td>
          //                 <td>${data.topic}</td>
          //                 <td class="d-flex justify-content-between">
          //                   <a href="#" class="text-success" onclick="edit(this.id)"><i class="fa fa-solid fa-pen"></i></a>
          //                   <a href="#" class="text-danger" onclick="get(this.id)"><i class="fa fa-solid fa-trash"></i></i></a>
          //                 </td>
          //               </tr>
          // `)
          
          
          if(id == "submit_donation"){
            toastr.success('Donation Uploaded Successfully')
            $("#submit_donation").html(`<i class="fas fa-upload"></i>
                  <span>Post Donation</span>`)
          }else{
            toastr.success('Donation Updated Successfully')
            $("#update_donation").html(`<i class="fas fa-upload"></i>
                  <span>Post Donation</span>`)
          }
          
        }
        
        
      }
    })
    // console.log(formdata);
    
  }
</script>
</body>
</html>
