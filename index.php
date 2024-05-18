<?php
  include_once "Controller/Controller.class.php";
  include_once "Controller/Database.php";
  $dbh = new Database;
  $db = $dbh->connect();
  $ctrl = new Controller($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="google" content="notranslate">
  <meta name="author" content="">
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> -->

  <title>Muslim Ummah Foundation</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/muf.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet"> -->
  
  <style>
    /* CSS for the container div */
    .overlay-container {
      position: relative;
      width: 100%;
      background-image: url('assets/images/ramadan.jpg');
      /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      height: 100%;
      /* Adjust the height as needed */
    }

    /* CSS for the dark overlay */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(22, 34, 57, 0.85);
      /* Adjust the opacity (0.5 for 50% darkness) */
    }

    /* Add your content inside the overlay container */
    .overlay-content {
      position: relative;
      z-index: 1;
      color: #fff;
      /* Text color on the overlay */
      padding: 20px;
      /* Adjust as needed */
    }
  </style>
</head>

<body>

  <!-- <div class="preloader">
    <div class="animation_preloader">
      <div class="spinner"></div>
      <p class="text-center">Loading</p>
    </div>
    <div class="loader">
      <div class="row vh-100">
        <div class="col-3 loader_section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader_section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader_section section-right">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader_section section-right">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div> -->
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <!-- <a href="#"><em>Grad</em> School</a> -->
      <img src="assets/images/log.png" alt="" style="height: 64px; width: 64px;">
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">

        <li><a href="#" class="external" Disabled>Muslim Ummah Foundation</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/bg-vid.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h4 style="color: white;">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h4>
        <h4 style="color: white;">الْعُمْرَةُ إِلَى الْعُمْرَةِ كَفَّارَةٌ لِمَا بَيْنَهُمَا وَالْحَجُّ الْمَبْرُورُ
          لَيْسَ لَهُ جَزاءٌ إِلا الجنَّةُ</h4>
        <h2>One Umrah to the next is an expiation for whatever happened between them and the only reward for an accepted
          Hajj is paradise.</h2>
        <p style="color: white;">(Bukhari and Muslim)</p>
        <div class="main-button">
          <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12 offset-md-4">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Video sermon</h4>
              </div>
              <div class="content-hide">
                <ul class="ul-class">
                  <li class="li-class"><a href="https://www.facebook.com/profile.php?id=100067113468671">FaceBook</a>
                  </li>
                  <li class="li-class"><a href="http://tiktok.com/@muslimsummahtv">Tiktok</a></li>
                  <li class="li-class"><a href="https://youtube.com/@ustaznurudeenabunusoyba?si=RA-1Ab53Uzoadynr"
                      target="_blank">Youtube</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-6 col-12 ">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Video sermon</h4>
              </div>
              <div class="content-hide">
                <ul class="ul-class">
                  <li class="li-class"><a href="https://www.facebook.com/profile.php?id=100067113468671">FaceBook</a>
                  </li>
                  <li class="li-class"><a href="http://tiktok.com/@muslimsummahtv">Tiktok</a></li>
                  <li class="li-class"><a href="https://youtube.com/@ustaznurudeenabunusoyba?si=RA-1Ab53Uzoadynr"
                      target="_blank">Youtube</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Community Projects</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul class="ul-list">
              <li class="li-list"><a href='#tabs-1'>Travels & Tours</a></li>
              <li class="li-list"><a href='#tabs-2'>Masjid Development</a></li>
              <li class="li-list"><a href='#tabs-3'>Dawah</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/flyer.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Travels & Tours</h4>
                    <p>We provide our respective clients with the finest Umrah and Hajj pilgrimage experiences, along
                      with opportunities to explore other countries.</p>
                    <ul class="ul-class">
                      <li class="li-class">Genuine travel documents</li>
                      <li class="li-class">Reliable and Affordable</li>
                      <li class="li-class">Bespoke Accomadations</li>
                      <li class="li-class">Welfarism</li>
                      <li class="li-class">Prayer and Ethical support</li>
                      <li class="li-class">God feraing and friendly tour guide</li>
                      <li class="li-class">Pocket-friendly payment plans</li>
                    </ul>
                    <p class="scroll-to-section"><a href="#section7">For more enquiries, Contanct Us Now</a></p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/mosque.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Mosque Development</h4>
                    <p>Within it's community and beyond, Muslim Ummah Foundation organizes various programmes like
                      weekly alqah, ramadan tafsir,
                      to promote the development of masjid.
                    </p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/dawrah.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Dawrah</h4>
                    <p>Embark on an enriching journey with Muslim Ummah Foundation's annual Dawrah service—a profound experience cultivating unity, knowledge, and community connections through insightful discussions and shared Islamic values</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>More Community Projects</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/hifdh.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Quran Teaching</h4>
              <p>Dedicated Muslim organization empowers communities through accessible Quranic education, fostering
                spiritual growth, unity, and positive societal impact</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/public-lecture.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Public Lecture</h4>
              <p>Explore the enlightening realm of Muslim Ummah Foundation's Public Islamic Lectures—an annual event where knowledge blossoms, 
                unity thrives, and community connections deepen through shared Islamic insights</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/tafseer.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Ramadan Tafseer</h4>
              <p>Embark on a journey with Muslim Ummah Foundation's Ramadan Tafseer—an annual exploration of Islamic teachings, 
                uniting the community through insightful discussions, knowledge-sharing, and spiritual growth</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/itikaaf.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>I'tikaaf</h4>
              <p>Immerse in Muslim Ummah Foundation's I'tikaaf during the last 10 days of Ramadan—a spiritual retreat in the mosque, 
                fostering unity, reflection, and communal devotion through prayer and reflection.</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/zakat.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Zakat</h4>
              <p>Join Muslim Ummah Foundation's Zakat program, dedicated to supporting widows and orphans' welfare. This initiative uplifts the marginalized, ensuring their well-being through charitable contributions and Islamic principles</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/edu.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Western and Islamic education</h4>
              <p>Discover the enriching blend of Western and Islamic education at Muslim Ummah Foundation. For a fee, students experience a holistic learning environment, integrating academic excellence with Islamic values and cultural awareness</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/halaqa.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Weekly Halaqa</h4>
              <p>Experience Muslim Ummah Foundation's Sunday Halqah service—building unity, deepening spirituality,
                 and connecting our community through insightful discussions.</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/jumah.jpg" alt="Course #1" class="img-fluid">
            <div class="down-content">
              <h4>Jumah</h4>
              <p>Join Muslim Ummah Foundation's Friday Jumah service—forge spiritual connections, strengthen community bonds, 
                and share in the devotion of a sacred weekly gathering.</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/ramadan iftar.jpg" alt="Course #2" class="img-fluid">
            <div class="down-content">
              <h4>Ramadan Iftar Schemes</h4>
              <p>Muslims Ummah Foundation facilitates Ramadan Iftar Schemes, fostering community cohesion through collective iftar arrangements, embodying the spirit of Ramadan sharing and solidarity.</p>

            </div>
          </div>
          <div class="item">
            <img src="assets/charity.jpg" alt="Course #3" class="img-fluid">
            <div class="down-content">
              <h4>Charity & Donation</h4>
              <p>
                Compassionate Muslim organization empowers communities with charity, mobilizing donations for the needy.
                Cultivating hope, one act of kindness at a time
              </p>

            </div>
          </div>
          <div class="item">
            <img src="assets/councelling.jpg" alt="Course #4" class="img-fluid">
            <div class="down-content">
              <h4>Counseling</h4>
              <p>
              Muslims Ummah Foundation provides counseling services, uniting the community through guidance and support, promoting emotional well-being and spiritual growth.
              </p>

            </div>
          </div>
          <div class="item">
            <img src="assets/camping.jpg" alt="Course #4" class="img-fluid">
            <div class="down-content">
              <h4>Islamic camping</h4>
              <p>
              Muslims Ummah Foundation hosts enriching Islamic camps, engaging kids, teens, and adults with spiritual, educational activities, promoting unity, and nurturing community bonds

              </p>

            </div>
          </div>
          <div class="item">
            <img src="assets/funeral.jpg" class="img-fluid" alt="">
            <div class="down-content">
              <h4>Funerals</h4>
              <p>
              Muslims Ummah Foundation compassionately facilitates Islamic funeral rites, ensuring dignified departures for deceased members, providing solace to bereaved families with cultural sensitivity.
              </p>

            </div>
          </div>
          <div class="item">
            <img src="assets/video sermon.jpg" alt="" class="img-fluid">
            <div class="down-content">
              <h4>Video sermons</h4>
              <p>
              Muslims Ummah Foundation conducts engaging video sermons, uniting the Muslim community, and promoting spiritual growth and knowledge-sharing.
              </p>

            </div>
          </div>
          <div class="item">
            <img src="assets/matrimonial.jpg" class="img-fluid" alt="">
            <div class="down-content">
              <h4>Matrimonial</h4>
              <p>
              Muslims Ummah Foundation orchestrates matrimonial gatherings, fostering connections among Muslims, aiding in meaningful relationships and marriage within the community
              </p>

            </div>
          </div>
          <div class="item">
            <img src="assets/radio.jpg" class="img-fluid" alt="">
            <div class="down-content">
              <h4>Radio program</h4>
              <p>
                Join the enlightening journey with Muslim Ummah Foundation's radio program, where Quranic teachings and
                community empowerment resonate, fostering unity, wisdom, and positive change
              </p>

            </div>
          </div>
        </div>
      </div>
      <div class="yogaPlace-section mt-4">
        <div class="row sections-detail">
          <div class="col-12">
            <h2 class="section-title">Today's Prayer Times</h2>
          </div>
          <div class="inside-container prayer-times mt-5">
            <div class="row yogaPlace-col">
              <div class="col-lg-2">
                <div class="yogaPlace-img">
                  <img src="assets/kaaba.png" class="yogaPlace-in-img mx-auto d-block" alt="">
                </div>              
                <a href="#"><h5 class="yogaPlace-title text-center">Fajr</h5></a>
                <p class="yogaPlace-desc text-center text-white" id="fajr">5:45 AM</p>
              </div>
              <div class="col-lg-2">
                <div class="yogaPlace-img">
                  <img src="assets/kitab.png" class="yogaPlace-in-img mx-auto d-block" alt="">
                </div>              
                <a href="#"><h5 class="yogaPlace-title text-center">Shuruq</h5></a>
                <p class="yogaPlace-desc text-center text-white" id="shuruq">6:50 AM</p>
              </div>
              <div class="col-lg-2">
                <div class="yogaPlace-img">
                  <img src="assets/masjid.png" class="yogaPlace-in-img mx-auto d-block" alt="">
                </div>              
                <a href="#"><h5 class="yogaPlace-title text-center">Dhuhr</h5></a>
                <p class="yogaPlace-desc text-center text-white" id="zuhr">12:50 PM</p>
              </div>
              <div class="col-lg-2">
                <div class="yogaPlace-img">
                  <img src="assets/star.png" class="yogaPlace-in-img mx-auto d-block" alt="">
                </div>
                <a href="#"><h5 class="yogaPlace-title text-center">Asr</h5></a>
                <p class="yogaPlace-desc text-center text-white" id="asr">4:00 PM</p>
              </div>
              <div class="col-lg-2">
                <div class="yogaPlace-img">
                  <img src="assets/ruku.png" class="yogaPlace-in-img mx-auto d-block" alt="">
                </div>
                <a href="#"><h5 class="yogaPlace-title text-center">Maghrib</h5></a>
                <p class="yogaPlace-desc text-center text-white" id="maghrib">6:58 PM</p>
              </div>
              <div class="col-lg-2">
                <div class="yogaPlace-img d-flex justify-content-center align-item-center">
                  <img src="assets/moon.png" class="yogaPlace-in-img mx-auto d-block" alt="">
                </div>
                <a href="#"><h5 class="yogaPlace-title text-center">Isha</h5></a>
                <p class="yogaPlace-desc text-center text-white" id="ishai">7:58 PM</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>


  <!-- </section> -->
  <section class="section coming-soon mt-5" data-section="section3">
    <h4 class="sect-title text-center">Upcoming<em> Events</em></h4>
    <div class="card mx-5 my-5 bg-transparent border-0 shadow-none">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="assets/invitation.png" class="img-fluid" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body text-white mx-auto">
            <div class="continer centerIt">
              <div>
                <h6 class="text-center">Public lecture</h6>
                <div class="counter m">
  
                  <div class="days">
                    <div id="days" class="value">00</div>
                    <span>Days</span>
                  </div>
  
                  <div class="hours">
                    <div id="hours" class="value">00</div>
                    <span>Hours</span>
                  </div>
  
                  <div class="minutes">
                    <div id="minutes" class="value">00</div>
                    <span>Minutes</span>
                  </div>
  
                  <div class="seconds">
                    <div id="seconds" class="value">00</div>
                    <span>Seconds</span>
                  </div>
  
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 align-self-center">
          <div class="left-content">

            <h4><em>Donation</em></h4>
            <p> Join Muslim Ummah Foundation in supporting vital Islamic charities. Your donations empower communities, provide education, and alleviate poverty, fostering a compassionate and united global Muslim Ummah.
            </p>
            <!-- <div class="main-button">
              <a href="" data-toggle="modal" data-target="#modal-xl"> View All
                Cases
              </a>
            </div> -->
          </div>
          
        </div>
        <div class="col-md-8">

        </div>
        
      </div>
    </div>
  </section>

  <section class="section contact" id="section7" data-section="section7">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">

          <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->

          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."
                    required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="sendmail" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <!-- <iframe
              src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
              width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3656421630294!2d3.244413474360567!3d6.725162220788336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b99f9659873c1%3A0x11d3d8f59bd9d8b7!2sMuslim%20Ummah!5e0!3m2!1sen!2sng!4v1706581173807!5m2!1sen!2sng" 
                width="100%" height="422px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        
      </div>
    </div>
  </section>
 
  
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
  
  <script>

const storeOpening = new Date('jan 01, 2027 00:00:00');

setInterval(function() {
    setCountdown(storeOpening);
},1000);

function setCountdown(countingDownTime) {

    let now = new Date();

    let timeRemaining = countingDownTime - now;


    // Now to convert this into time remaining in regular units

    // Seconds
    let seconds = Math.floor(timeRemaining / 1000);
    // Minutes
    let minutes = Math.floor(timeRemaining / (1000*60));
    // Hours 
    let hours = Math.floor(timeRemaining / (1000*60*60));
    // Days
    let days = Math.floor(timeRemaining / (1000*60*60*24));


    // Now subtract the bigger units of time from the smaller ones

    let daysToDisplay = days;

    // Subtract 24 hours for every day remaining from the hour count
    let hoursToDisplay = hours - (days * 24);
    // Subtract 60 minutes for every hour remaining from the minute count
    let minutesToDisplay = minutes - ( hours * 60 );
    // Subtract 60 seconds for every minute remaining from the seconds count
    let secondsToDisplay = seconds - ( minutes * 60 );

    // Countdown now in displayable format!

    // Print to DOM
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    daysEl.textContent = daysToDisplay;
    hoursEl.textContent = hoursToDisplay;
    minutesEl.textContent = minutesToDisplay;
    secondsEl.textContent = secondsToDisplay;

}
    // $('.prayer-times').prayerTimes();
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos
        },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
    
    // var key = "AIzaSyC1vZ5GNssMnw_AQA5JSkt1hduSCjUpvj4"
    // var engine_id = "b65b5202333234cea"
    // var search_query = "todays prayer time "

    // var params = new URLSearchParams({
    //   "q": search_query,
    //   "key": key,
    //   "cx": engine_id
    // })
    // var search_url = `https://www.googleapis.com/customsearch/v1?${params.toString()}`

    // fetch(search_url).then(async (response) => {
    //   res = await response.text()
    //   result = JSON.parse(res)
    //   console.log(result)
    // })

    // function payWithPaystack(e, email, amount) {
    //   e.preventDefault();
    //   let handler = PaystackPop.setup({
    //     key: 'pk_live_92115b94650b1264be9494d89c2322599e35338d', // Replace with your public key
    //     email: email,
    //     amount: amount * 100,
    //     ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    //     // label: "Optional string that replaces customer email"
    //     onClose: function () {
    //       alert('Window closed.');
    //     },
    //     callback: function (response) {
    //       //let message = 'Payment complete! Reference: ' + response.reference;
    //       let formData = new FormData()
    //       let data1 = $("#form1").serializeArray();
    //       let data2 = $("#form2").serializeArray();
    //       //console.log(data1);
    //       for (let data of data1) {
    //         formData.append(data.name, data.value);
    //       }
    //       for (let data of data2) {
    //         formData.append(data.name, data.value);
    //       }
    //       formData.append("ref", response.reference)
    //       let products = $(".product").map(function () {
    //         return $(this).text();
    //       }).get();
    //       let quantity = $(".quantity").map(function () {
    //         return $(this).val();
    //       }).get().filter((data) => {
    //         return data !== "";
    //       });

    //       for (let key in products) {
    //         formData.append("cart_item[]", [products[key], quantity[key]])
    //       }
    //       $.ajax({
    //         url: "../requests.php",
    //         method: "POST",
    //         data: formData,
    //         processData: false,
    //         cache: false,
    //         contentType: false,
    //         success: (res) => {
    //           console.log(res);
    //           $("#exampleModal").modal('hide')
    //         },
    //         error: () => {
    //           console.log("something went wrong");
    //         }
    //       })
    //     }
    //   });
    //   handler.openIframe();
    // }
    
    // $(".donate").click(async (e) => {
    //   e.preventDefault()
      
    //   $("#section6").removeClass("d-none").addClass("d-block")
    //   $("#section7").addClass("d-none")
    //   location.href = "#section6"
    // })
    // $("#sendmail").click((e) => {
    //   e.preventDefault();
    //   let data = {
    //     name: $("#name").val(),
    //     message: $("#message").val(),
    //     email: $("#email").val(),
    //     subject: "enquiry"
    //   }

    //   $.ajax({
    //     url:"./Controller/sendmail.php",
    //     method: "POST",
    //     data: data,
    //     success: (res) => {
    //       console.log(res);
    //     }
    //   })
    // })
    

    

  </script>
</body>

</html>
