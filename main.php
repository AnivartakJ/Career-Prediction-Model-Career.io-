<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgcnt.jpg); width:100%; height: 728px;"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Career Guidance System</h1>
							
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style="margin-left: 5px; width:550px; margin-bottom:-15px;"><i>Discover yourself : Uncover Your Ideal Career Path</i><br></p>
									
									<p class="lead white-text" style="margin-left: 5px; width:550px"><b>Find your perfect fit and access timely guidance and support every step of the way!</b></p>

									<a class="main-button icon-button" href="login.php">Get Started!</a>

								<?php else: ?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><p class="lead white-text" style="margin-left: 5px; width:550px; margin-bottom:-15px;"><i>Discover yourself : Uncover Your Ideal Career Path</i><br></p>
									
									<p class="lead white-text" style="margin-left: 5px; width:550px"><b>Find your perfect fit and access timely guidance and support every step of the way!</b></p>

									<!-- <a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a> -->
									<a class="main-button icon-button" href="./templates/hometest1.php">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->



        <!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Career.io</h2>
						<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
						<p class="lead"><b style="color: rgb(56, 48, 48);">Career.io</b> is all-in-one destination <br>dedicated to aiding your self-discovery, finding your ideal career fit, <br> and delivering comprehensive resources every step of the way.</p>
						
					</div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="login.php"><h4>Career Prediction</h4></a>
								<?php else: ?>
									<a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/templates/hometest1.php"><h4>Career Prediction</h4></a>
									
								
							<?php endif ?>
								
								<p>Take our comprehensive test designed specifically for college students. Discover a spectrum of roles perfectly aligned with your unique skill set and aspirations post-engineering. This test serves as your personalized compass, guiding you towards the ideal career path that resonates with your expertise.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="blog.php" >
								<h4>Knowledge Network</h4>
								</a>
								<p>
Expand your knowledge base with diverse resources including essential informational links, study materials, empowering you to broaden your understanding across multiple channels.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="courses.php" >
								<h4>Online Courses</h4>
								</a>
								<p>Access a curated collection of links leading you to a diverse array of courses specifically tailored to match your interests, skill sets, and career aspirations. </p>
							</div>
						</div>
					</div>
					<!-- /feature -->
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		<div id="cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgmid.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px;margin-left:100px ;">Hey,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;margin-left:100px">Your Career Path Begins Here</h2>
									<p class="lead white-text" style="margin-left:100px;" >We Create Beautiful Experiences
										- That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="register.php" style="margin-left:100px;margin-top:15px">Get Started!</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;margin-left:100px;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;margin-left:100px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" style="margin-left:100px;" >We Create Beautiful Experiences
									- That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/templates/hometest1.php" style="margin-left:100px; margin-top:15px">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">About Career.io</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 40px;">Our site offers personalized experiences for education seekers, tailoring content to their educational backgrounds and career interests.</p>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 5px;">This empowers informed decision-making by providing easy access to detailed information on a wide array of aspects like career options, relevant courses and study materials.</p>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 5px;">Engagement opportunities with experts, current students, and alumni groups for enhanced understanding, sharing experiences, and gaining insights.</p>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 5px;">Student-centric tools and products including Career Prediction, Knowledge Network, Blogs, Community discussion forums, and diverse course offerings.</p>
							
						
						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/about.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Help us to get to know you better!</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

<?php include 'footer.php'?>
</html>
