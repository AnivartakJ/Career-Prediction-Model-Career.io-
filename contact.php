<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<!-- <li><a href="main.html">Home</a></li> -->
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Send A Message</h4>
							<form>
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="text" name="subject" placeholder="Subject">
								<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
								<button class="main-button icon-button pull-right">Send Message</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>Career.io@gmail.com</li>
							<li><i class="fa fa-phone"></i>991-345-8760</li>
							<li><i class="fa fa-map-marker"></i>New Delhi, India</li>
						</ul>

						<!-- contact map -->
						<div id="map" >
							<img src="img/map.jpg" style="width:100%"/>
						</div>
						<!-- /contact map -->

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		
		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="main.html">Career.io</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
			

					<!-- social -->
				
					<!-- /social -->
					<div id="bottom-footer" class="row">

<!-- social -->
<div class="col-md-4 col-md-push-8">
	<ul class="footer-social">
		<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
		<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
		<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
	</ul>
</div>
					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->


			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->
		
		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
