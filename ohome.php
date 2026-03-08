<?php 
session_start();

	include("aconnection.php");
	include("ofunctions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Traffic Management Sysytem</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="ohome.php" class="logo">
                            TMS
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About us</a></li>
                            <li class="scroll-to-section"><a href="#testimonials">team</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">contact us</a></li>
                            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
                            
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/a.jpg" alt="">
                <div class="text-content">
                  <h3>Welcome To TMS</h3>
                  <h5>TRAFFIC MONITORING SYSTEM</h5>
                    <a href="ofine.php" class="main-stroked-button">Fine Allotment</a>
                    <a href="osignalling.php" class="main-stroked-button">edit signal timings</a>
                    <a href="https://www.google.co.in/maps/" class="main-stroked-button">google maps</a>
                    <a href="oroad.php" class="main-stroked-button">road info</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/b.jpg" alt="">
                <div class="text-content">
                    <h3>Welcome To TMS</h3>
                    <h5>TRAFFIC MONITORING SYSTEM</h5>
                    <a href="ofine.php" class="main-stroked-button">Fine Allotment</a>
                    <a href="osignalling.php" class="main-stroked-button">edit signal timings</a>
                    <a href="https://www.google.co.in/maps/" class="main-stroked-button">google maps</a>
                    <a href="oroad.php" class="main-stroked-button">road info</a>
                  </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/c.jpg" alt="">
                <div class="text-content">
                    <h3>Welcome To TMS</h3>
                    <h5>TRAFFIC MONITORING SYSTEM</h5>
                    <a href="ofine.php" class="main-stroked-button">Fine Allotment</a>
                    <a href="osignalling.php" class="main-stroked-button">edit signal timings</a>
                    <a href="https://www.google.co.in/maps/" class="main-stroked-button">google maps</a>
                    <a href="oroad.php" class="main-stroked-button">road info</a>
                  </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->



    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>TRAFFIC MONITORING SYSTEM</h2><br><br>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/service-item-01.png" alt="">
                                    <h4>Top Notch</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/service-item-01.png" alt="">
                                    <h4>Robust</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Reliable</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Up-to-date</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p><br>Are you stuck in a jam with blaring horns for company?

                            TMS creates new order by offering tested and proven Integrated Traffic Technology for both authority to better manage local traffic conditions, and for commuters to be ahead of demanding and chaotic traffic situations.<br><br>
                            
                            In-house designed Intelligent Algorithm and leverage of advance Traffic Technologies keeps traffic smooth and jam-free, prevents unnecessary mishaps and accidents, thus protecting lives at the same time.
                            
                            
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->



    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Traffic Monitoring</h4>
                            <p>We Can Get Rid of Major Causes and Problems of Traffic.
                                Monitoring  System Monitors Every Activity to Avoid Problems.
                                Have A Rest Less Traffic System which Wil Benefit Everyone.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Fine alloting</h4>
                            <p>Alloting fines to the vehicles that disobeys the traffic rules
                                Fine amount and reason will be reflecting in the account
                                Amount can be paid online<br><br>
                            </p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>signal timings</h4>
                            <p>All the signal timigs can be generated from here.
                                Plan your rides accordingly
                                Option of sharing the signal timigs to other users are also provided.<br><br>
                            </p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->



    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>OUR TEAM</h6>
                        <h2>The Backbones of TMS</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/asw.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.01 Aswin Anand</h4>
                            <span>CB.SC.I5DAS19013</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/ard.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.02 Aardra R Nair</h4>
                            <span>CB.SC.I5DAS19001</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/ais.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.03 Aishwarya S</h4>
                            <span>CB.SC.I5DAS19005</span>
                        </div>                                                                                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    


    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">9547821430</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">info@tms.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.trafficms.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2020 TMS Co., Ltd. 
                        
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>