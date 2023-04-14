<?php
require_once('cfg/func.php');
?>
<!doctype html>
<html class="no-js" lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>BUHRIS </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/fav.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/style1.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/cog.png" alt="Busitema University">
                </div>
            </div>
        </div>
    </div>
	   
    <!-- Preloader Start -->
    <header>
       <?php  require_once('menu.php');?>
    </header>
   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/top_img.png">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Signup Now</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->
   <!--================Blog Area =================-->
   <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
						<div class="post-details3">
                        <form class="form-contact contact_form" action="server/c_signup.php" method="post" id="signupForm" novalidate="novalidate">
                            <div class="row">
								 <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter full name'" placeholder="Name">
                                    </div>
                                </div>
								 <div class="col-md-6">
                                  <div class="form-group">
									<div class="form-select" id="default-select">
									<select name="title" id="title" class="form-control valid">
									<option value=" 1">Choose Title</option>
									<option value="Mr.">Mr</option>
									<option value="Dr.">Dr</option>
									<option value="Ms.">Ms</option>
									<option value="Mrs.">Mrs</option>
									<option value="Eng.">Eng</option>
									<option value="Miss.">Miss</option>
									<option value="Prof">Prof</option>
									</select>
									</div>
							    </div>
                                   
                                </div>
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-select" id="default-select">
									<select name="gender" id="gender" class="form-control valid">
									<option value=" 1">Choose Gender</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
									</select>
									</div>
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="phone1" id="phone1" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone1'" placeholder="Mobile Phone">
                                    </div>
                                </div>
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="phone2" id="phone2" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Home Phone'" placeholder="Home Phone">
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="pass" id="pass" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Enter Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3 ">
								<div class="pull-right"><button type="submit" class="genric-btn primary">Signup</button></div>
								<div class="msg" id="msg"><?php echo read('msg4'); ?></div>
								
                                
                            </div>
                        </form>
						</div>
                    </div>
                </div>
            </div>
        </div>
   <!--================ Blog Area end =================-->
   
    <?php  require_once('footer.php');?>
<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
      <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>
      <!-- Jquery Mobile Menu -->
      <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="./assets/js/owl.carousel.min.js"></script>
      <script src="./assets/js/slick.min.js"></script>
      <script src="./assets/js/price_rangs.js"></script>
      <!-- Date Picker -->
     
		<!-- One Page, Animated-HeadLin -->
      <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
      <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
      <script src="./assets/js/jquery.scrollUp.min.js"></script>
      <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
      
      <!-- contact js -->
      <script src="./assets/js/contact.js"></script>
      <script src="./assets/js/jquery.form.js"></script>
      <script src="./assets/js/jquery.validate.min.js"></script>
      <script src="./assets/js/mail-script.js"></script>
      <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
      <script src="./assets/js/plugins.js"></script>
      <script src="./assets/js/main.js"></script>
        
</body>
</html>