<?php
require('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>flash</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/flash.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
      	<h3><em><strong>flash</strong></em></h3>
        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#partners">Partners</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/flash.png" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide solutions at lightning fast speed</h2>
        <div>
         <form method="POST" action="tracking.html" class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
              <label for="Tracking ID" class="sr-only">Tracking ID</label>
              <input type="" class="form-control" id="Tracking ID" placeholder="Eg. ABC1234" required="!">
            </div>
            <button type="submit" class="btn btn-services mb-2">Track</button>
         </form>
	       <button onclick="window.location.href='ship.php';" type="submit" class="btn btn-services mb-2">Ship</button>

        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Our solutions connect people and possibilities.
            Connecting people with goods, services and ideas creates opportunities and improves lives. At Flash, we believe that a connected world is a better world, and that belief guides everything we do.</p>
        </header>

      </div>
    </section>	

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Ship anything you want in a flash.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="" style=""></i></div>
              <h4 class="title"><a href="">Same Day Delivery</a></h4>
              <p class="description">Place your order in the morning and have it delivered by night!</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="" style=""></i></div>
              <h4 class="title"><a href="">Extra Care</a></h4>
              <p class="description">Ship foods and fragile items carefree. We'll take extra care of your parcel.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="" style=""></i></div>
              <h4 class="title"><a href="">Track your order live</a></h4>
              <p class="description">Track karo aur kya lol</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="" style=""></i></div>
              <h4 class="title"><a href="">Cancellation</a></h4>
              <p class="description">Get full refund if order cancelled before being dispatched</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>We're very good at what we do.</p>
        </header>         

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10,000</span>
            <p>Happy Customers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">500</span>
            <p>Daily Orders</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">100</span>
            <p>Hard Workers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Years of Experience</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Partners Section
    ============================-->
    <section id="partners" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Partners</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel partners-carousel wow fadeInUp">
    
              <div class="partner-item">
                <img src="img/musk.png" class="partner-img" alt="">
                <h3>Elon Musk</h3>
                <h4>Ceo &amp; Founder Tesla</h4>
                <p>
                  Best in the biz.
                </p>
              </div>
    
              <div class="partner-item">
                <img src="img/tata.jpg" class="partner-img" alt="">
                <h3>Tata</h3>
                <h4>Business Man</h4>
                <p>
                  Best in the biz
                </p>
              </div>
    
              <div class="partner-item">
                <img src="img/ambani.jfif" class="partner-img" alt="">
                <h3>Ambani</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Best in the biz.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #Partners -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Led By RahilRaj</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rahil Raj</h4>
                  <span>Chief Executive Officer</span>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jinit</h4>
                  <span>Managing Director</span>
                 
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.116099006!2d72.74109925453989!3d19.082197839051503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1573488161994!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Mumbai</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>flash@flash.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>7777777777</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:1" data-msg="Enter something" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter more characters" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Write something" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><em>flash</em></h3>
            <p>Our solutions connect people and possibilities.
            Connecting people with goods, services and ideas creates opportunities and improves lives. At Flash, we believe that a connected world is a better world, and that belief guides everything we do.</p>
          </div>

        <div style="position: relative; bottom: 0; left: 600px;   text-align:ltr;">
          <div class="col-lg-20 col-md-20 footer-contact">
            <h3>Contact Us</h3>
            <p>Mumbai <br>
              India<br>
              <strong>Phone:</strong> 7777777777<br>
              <strong>Email:</strong> flash@flash.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>
</div>

  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
