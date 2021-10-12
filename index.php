<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "support@notesjugaad.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Notesjugaad | free study material | college notes | placement help | competitive exams notes| Best notes | IPU notes| DU notes| Study material| question paper | previous year question paper</title>
  <meta content="Notesjugaad provides you best online free study material, pdf, placement guides for college students. having troubles: How to get job?, How to prepare for campus placements?, semester exam notes?, Competitive exam study material?, exam papers?
Just visit us." name="description">
  <meta content="Notesjugaad | free study material | college notes | placement help | competitive exams notes| Best notes | IPU notes| DU notes| Study material| question paper | previous year question paper" name="keywords">

  <!-- Favicons -->
  <link href="favicon.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">NotesJugaad</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/3.png" alt=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#skills">Services</a></li>
          <li><a href="#portfolio">University</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/c2.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>NotesJugaad</h2>
               <h3><p>Solution to all your Class Problems at a single Platform</p></h3>
              </div>
            </div>
          </div>

<div class="carousel-item">
            <div class="carousel-background"><img src="img/ip.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>IP UNIVERSITY</h2>
                <p>All study material including Syllabus, Exam Papers and some important exercises for Colleges Affiliated to GGSIP University can be accessed from here.</p>
                <a href="ipu.html" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/ce.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>GATE</h2>
                <p>All study material including Syllabus, Notes for GATE can be accessed from here.</p>
                <a href="gate.html" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  
 

          <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>What We Provide</h3>
          <p>Here at NotesJugaad, you’ll find in-depth, insanely useful notes covering the things you truly need to know in order to be a successful student.<br>
I hope you find this site helpful to you! Feel free to reach out at any time.</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">College Notes <i class="val"></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Question Papers <i class="val"></i></span>
            </div>
          </div>
 <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Practical Files<i class="val"></i></span>
            </div>
          </div>
<div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Placement Guide<i class="val"></i></span>
            </div>
          </div>
<div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Competitive Notes<i class="val"></i></span>
            </div>
          </div>
          

        </div>

        </header>

        
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>OVERALL STATS</h3>
          <p>These are the overall Stats of our Website, that inlcudes students working with us, our dedicated working team, courses and subject notes that we provide.</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">52</span>
            <p>STUDENTS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">25</span>
            <p>SUBJECTS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">9</span>
            <p>COURSE</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">8</span>
            <p>Employees</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">CONTENT</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/ipu1.jpeg" class="img-fluid" alt="">
                <a href="img/ipu1.jpeg" data-lightbox="portfolio" data-title="GGSIP University" class="link-preview"><i class="ion ion-eye"></i></a>
                <a href="ipu.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="ipu.html">IPU</a></h4>
                <p>Location: Delhi</p>
              </div>
            </div>
          </div>
<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/ce.jpg" class="img-fluid" alt="">
                <a href="img/ce.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="GATE"><i class="ion ion-eye"></i></a>
                <a href="gate.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="gate.html">GATE</a></h4>
		<p>Competitive Exam</p>
              </div>
            </div>
          </div>
          

      </div>
<div class="container">

        <header class="section-header">
          <h3 class="section-title">Coming Soon</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Updates</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/hbtu.jpeg" class="img-fluid" alt="">
                <a href="img/hbtu.jpeg" class="link-preview venobox" data-gall="portfolioGallery" title="HBTU"><i class="ion ion-eye"></i></a>
                <a href="hbtu.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="hbtu.html">HBTU</a></h4>
                <p>Location: Kanpur</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/du.jpeg" class="img-fluid" alt="">
                <a href="img/du.jpeg" class="link-preview venobox" data-gall="portfolioGallery" title="Delhi University"><i class="ion ion-eye"></i></a>
                <a href="du.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="du.html">DU</a></h4>
                <p>Location: Delhi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/pl.jpg" class="img-fluid" alt="">
                <a href="img/pl.jpg" data-lightbox="portfolio" data-title="GGSIP University" class="link-preview"><i class="ion ion-eye"></i></a>
                <a href="pl.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="">Placement Guide</a></h4>
              </div>
            </div>
          </div>

          
</div>
    </section><!-- End Portfolio Section -->


    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
	  <div class="testimonial-item">
            <img src="img/t4.jpg" class="testimonial-img" alt="">
            <h3>Harsh Chauhan</h3>
            <h4>Student</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              I always wished That I would not need to ask to people for notes and disturb them during exams. It's not possible to make notes everyday, truly speaking you might miss something belongs to the day you missed college. So I find this website extremely helpful  and it works best for me.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
	<div class="testimonial-item">
            <img src="img/t7.jpg" class="testimonial-img" alt="">
            <h3>Apoorva Jain</h3>
            <h4>Asst. Professor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
             'Notesjugaad ,is a very good platform that will prove very helpful to all the students who are looking for study material at one place. I congratulate the team members for such a good initiative. Good luck from us to all.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          

          <div class="testimonial-item">
            <img src="img/t2.jpeg" class="testimonial-img" alt="">
            <h3>Pranchal Omar</h3>
            <h4>Manager</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              'You don’t have to be great to start, but you have to start to be great.' I think it's a great start of Notesjugaad team to help college students in their studies by providing all sort of help regarding study materials. It's very helpful and commendable. I think college is not just about studying but it's a kind of fun in engaging in other sort of activities and learning from that too. You don't need to be your books for all the time. In order to save your time with books you just need what this website has got.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/t3.jpeg" class="testimonial-img" alt="">
            <h3>Hamza Javed</h3>
            <h4>Developer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
             'The most successful people work smart, not hard.' Hell, yeah I don't personally like going after a course book again and again as we don't need to see how they've put those words there again and again. Short notes are all helpful especially during the exams when we don't have much time. I found this website to be extremely helpful as we got nothing to worry about, everything just in one place.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          

        </div>

      </div>
    </section><!-- End Testimonials Section -->
<main id="main">
    

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>We all know that college isn’t the Hogwarts Express – you’re not hurtling down a set track with specific destination (magical castle or not).
But it is a concentrated dose of resources and opportunities that becomes what you make of it.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/m1x.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
               Our mission is to provide essential study material to the college folks in order to simplify their studies. We are here to help you with study notes, exam papers, practicals and related books as well. We'll keep on updating according to your needs and feedbacks.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/m2x.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                With Advanced setup we prioritise providing all the necessary things which are helpful to college folks, all in one platform. Online availability makes easy and quick arrangements of materials during high needs. We often hustle during exam time so one of our main goal is to keep you hustle-free and stress-free at the same time.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/m3x.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Our purpose is to make learning easy for college students.
We believe college life is not just about souse down in studies only it's more about overall growth and getting involved in other activities equally. So here we have a simple solution which reduces your time with books and keep you stress-free during exams.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Need to communicate with your seniors? Get suggestions from Qualified Professors? Whatever it is let us know through this feedback form. We will try to improve our website according to your suggestion. Feel free to reach us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address></address>
            </div>
          </div>
 <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:"></a></p>
            </div>
          </div>
         

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:notesjugaad1@gmail.com">support@notesjugaad.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
             <div class="container">
      
      <div id="error"><? echo $error.$successMessage; ?></div>
      
      <form method="post">
  <fieldset class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" >
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">What would you like to ask us?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </fieldset>
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
          
        </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
          

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h4>NotesJugaad</h4>
            <p>Here at NotesJugaad, you’ll find in-depth, insanely useful notes covering the things you truly need to know in order to be a successful student.<br>
I hope you find this site helpful to you! Feel free to reach out at any time.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="about.html">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="tos.html">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="pop.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Email:</strong> support@notesjugaad.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/notesjugaad1" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/notes.jugaad.94" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/notesjugaad1/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="mailto:notesjugaad1@gmail.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/in/notes-jugaad-5929b91a8" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>If you want to Subscribe for our Newsletters, then kindly enter your Email address below</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NOTESJUGAAD</strong>. Some Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main- JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>