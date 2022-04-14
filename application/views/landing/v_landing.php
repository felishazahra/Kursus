<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>My Course</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/adio/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/adio/css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="<?php echo base_url();?>template/adio/css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="<?php echo base_url();?>template/adio/images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>template/adio/css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets -->
<link rel="stylesheet" href="<?php echo base_url();?>template/adio/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>template/adio/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!--header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
					<div class="myicon"><a href="index.html"><img src="<?php echo base_url();?>template/adio/images/myicon.png"></a></div>
				</div>
                <div class="col-sm-9">
                <div class="menu-area">
                <nav class="navbar navbar-expand-lg ">
                <!-- <a class="navbar-brand" href="#">Menu</a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                    </button>
            <ul class="top_button_section">
               <li><a class="login-bt active" href="<?php echo base_url('login');?>">Login</a></li>
               <li><a class="login-bt" href="#">Register</a></li>
            </ul>
					</div>
			</div>

    <div class="row">
      <div class="banner_section layout_padding">
      <section>
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                    <div class="container">
                     <div class="row marginii">
                        <div class="col-md-5 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="banner_taital">English Course</h1>
                    <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="<?php echo base_url();?>template/adio/images/onlinelesson.png" style="max-width: 900%;"/></figure>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
              
              
            </div>
         </div>
      </section>
    </div>
    </div>

		</div>
        <!--header section end -->
        
		</div>
	</div>
    <!--banner section end -->
	<!--about section start -->
    <div class="about_section_2 ">
    	<div class="container">
    		<div class="row">
    				
    		</div>
    		<div class="row front">
    			<div class="col-md-2">
    				<div class="about_img"><img src="<?php echo base_url();?>template/adio/images/img-1.png"></div>
    			</div>
    			<div class="col-md-10">
    				<h1 class="fron_text">GRAMMAR</h1>
    				<p class="using_text">using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
    			</div>
    		</div>
    		<div class="row front">
    			<div class="col-md-2">
    				<div class="about_img"><img src="<?php echo base_url();?>template/adio/images/img-1.png"></div>
    			</div>
    			<div class="col-md-10">
    				<h1 class="fron_text">READING</h1>
    				<p class="using_text">using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
    			</div>
    		</div>
          <div class="row front">
    			<div class="col-md-2">
    				<div class="about_img"><img src="<?php echo base_url();?>template/adio/images/img-1.png"></div>
    			</div>
    			<div class="col-md-10">
    				<h1 class="fron_text">PRONUNCIATION</h1>
    				<p class="using_text">using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
    			</div>
    		</div>
    	</div>
    </div>
	<!--about section end -->
	<!--client section start -->
    
	<!--client section end -->
	<!--footer section start -->
	<div class="footer_section layout_padding">
		<div class="container">
			<div class="row">
			    <div class="col-sm-3">
				    <div class="footer_contact">Contact Us</div>
			    </div>
			  
		    </div>
		    <div class="enput_bt">
		    	<div class="row">
		    		<div class="col-md-6">
		    			<div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="NAME" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="EMAIL" name="Email">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="PHONE NUMBER" name="Email">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  <textarea class="massage-bt" placeholder="MASSAGE" rows="5" id="comment" name="text"></textarea>
                                </div>
                            </form>
                          </form>
                       </div> 
                       <div class="send_bt_main">
                       	<div class="left">
                       		<div class="send_bt"><a href="#">SEND</a></div>
                       	</div>
                       	<div class="right">
                       		<div class="social_icon">
                       			<ul>
                       				<li><a href="#"><img src="<?php echo base_url();?>template/adio/images/fb-icon.png"></a></li>
                       				<li><a href="#"><img src="<?php echo base_url();?>template/adio/images/twitter-icon.png"></a></li>
                       				<li><a href="#"><img src="<?php echo base_url();?>template/adio/images/in-icon.png"></a></li>
                       				<li><a href="#"><img src="<?php echo base_url();?>template/adio/images/instagram-icon.png"></a></li>
                       			</ul>
                       		</div>
                       	</div>
                       </div>
                    </div>
		    		</div>
	
		    	</div>
		    </div>
		    <div class="copyright_section">
		    	<p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
		    </div>
		</div>
	</div>
	<!--footer section end -->

      <!-- Javascript files-->
      <script src="<?php echo base_url();?>template/adio/js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>template/adio/js/popper.min.js"></script>
      <script src="<?php echo base_url();?>template/adio/s/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url();?>template/adio/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo base_url();?>template/adio/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url();?>template/adio/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo base_url();?>template/adio/js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?php echo base_url();?>template/adio/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         </script>	


         <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

        var image = 'images/location_point.png';
          var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
          });
        }
        </script>
        <!-- google map js -->
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
        <!-- end google map js -->
</body>
</html>