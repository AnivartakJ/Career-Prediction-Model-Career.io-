<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
							<!-- <li><a href="main.php">Home</a></li> -->
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Get Started</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#web">Web Development</a>
					<a class="tag" href="#web">Web Design</a>
					<a class="tag" href="#web">HTML</a>
					<a class="tag" href="#web">CSS</a>
					<a class="tag" href="#web">Bootstrap</a>
					<a class="tag" href="#web">jQuery</a>
					<a class="tag" href="#web">JavaScript</a>
					<a class="tag" href="#web">React</a>
					<a class="tag" href="#web">Ruby on Rails5</a>
					<a class="tag" href="#web">Sass</a>
					<a class="tag" href="#prog">Programming Langauges</a>
					<a class="tag" href="#server">Server Side</a>
					<a class="tag" href="#server">PHP</a>
					<a class="tag" href="#server">SQL</a>
					<a class="tag" href="#server">Node.js</a>
					<a class="tag" href="#server">Git</a>
					<a class="tag" href="#server">Django</a>
					<a class="tag" href="#server">Express.js</a>
					<a class="tag" href="#server">Flask</a>
					<a class="tag" href="#server">MongoDB</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >Web Development</h2>
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/jquery/default.asp" target="_blank" class="course-img">
									<img src="./img/coursejq.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/jquery/default.asp" target="_blank" style="font-size:18px; text-align: center">The Complete jQuery Course</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="https://www.w3schools.com/css/default.asp" target="_blank" class="course-img">
									<img src="./img/course02.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/css/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Introduction to CSS </b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/html/" target="_blank" class="course-img">
									<img src="./img/coursehtml.jpg " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/html/" target="_blank" style="font-size:18px; text-align: center">The Complete course on HTML</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
										<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursebtsp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Introduction to Bootstrap</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/js/" target="_blank" class="course-img">
									<img src="./img/coursejs.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/js/" target="_blank" style="font-size:18px; text-align: center">JavaScript Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/REACT/DEFAULT.ASP" target="_blank" class="course-img">
									<img src="./img/courserea.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/REACT/DEFAULT.ASP" target="_blank" style="font-size:18px; text-align: center">React Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://guides.rubyonrails.org/" target="_blank" class="course-img">
									<img src="./img/courseruby.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://guides.rubyonrails.org/" target="_blank" style="font-size:18px; text-align: center">Ruby Tips and Tricks</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/css/" class="course-img" target="_blank">
									<img src="./img/course04.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/css/" target="_blank" style="font-size:18px; text-align: center">HTML & CSS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://guides.rubyonrails.org/" target="_blank" class="course-img">
									<img src="./img/courseror.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://guides.rubyonrails.org/" target="_blank" style="font-size:18px; text-align: center">Ruby on Rails5</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.freecodecamp.org/news/how-to-build-your-first-saas/" target="_blank" class="course-img">
									<img src="./img/coursesass.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.freecodecamp.org/news/how-to-build-your-first-saas/" target="_blank" style="font-size:18px; text-align: center">Introduction to Sass</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://legacy.reactjs.org/tutorial/tutorial.html" target="_blank" class="course-img">
									<img src="./img/coursereact.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://legacy.reactjs.org/tutorial/tutorial.html" target="_blank" style="font-size:18px; text-align: center">React complete course</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://javascript.info/" class="course-img" target="_blank">
									<img src="./img/coursejas.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://javascript.info/" target="_blank" style="font-size:18px; text-align: center">Complete guide on JavaScript</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Programming Langauges</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.r-project.org/about.html" class="course-img">
									<img src="./img/course01.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.r-project.org/about.html" target="_blank" style="font-size:18px; text-align: center">R Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cpp/default.asp" class="course-img" target="_blank">
									<img src="./img/coursecpp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cpp/default.asp" target="_blank" style="font-size:18px; text-align: center;" >Learn C++</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/java/default.asp" class="course-img" target="_blank">
									<img src="./img/coursejava.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/java/default.asp" target="_blank" style="font-size:18px; text-align: center">Java Tutorial</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/python/" class="course-img" target="_blank">
									<img src="./img/coursepy.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/python/" target="_blank" style="font-size:18px; text-align: center">Complete guide on python</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://progate.com/courses/java" target="_blank" class="course-img">
									<img src="./img/coursejv.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://progate.com/courses/java" target="_blank" style="font-size:18px; text-align: center">Core Java</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://docs.python.org/3/tutorial/index.html" class="course-img" target="_blank">
									<img src="./img/coursepyth.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://docs.python.org/3/tutorial/index.html" target="_blank" style="font-size:18px; text-align: center">Python Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/index.php" target="_blank" class="course-img">
									<img src="./img/coursec.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/index.php" target="_blank" style="font-size:18px; text-align: center">C# Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/c/c_intro.php" target="_blank" class="course-img">
									<img src="./img/coursecp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/c/c_intro.php" target="_blank" style="font-size:18px; text-align: center">Complete C programming</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="server">Server Side</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/php/" target="_blank" class="course-img">
									<img src="./img/course05.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/php/" target="_blank" style="font-size:18px; text-align: center"><b>PHP Tips, Tricks, and Techniques</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/sql/" target="_blank" class="course-img">
									<img src="./img/coursesql.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/sql/" target="_blank" style="font-size:18px; text-align: center"><b>SQL Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/nodejs/" target="_blank" class="course-img">
									<img src="./img/coursend.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/nodejs/" target="_blank" style="font-size:18px; text-align: center"><b>Node.js crash course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursegit.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Mastering Git</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
							<!-- single course -->
							<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mongodb.com/docs/manual/tutorial/" target="_blank" class="course-img">
									<img src="./img/mongo.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mongodb.com/docs/manual/tutorial/" target="_blank" style="font-size:18px; text-align: center"><b>Mastering MongoDB</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
							<!-- single course -->
							<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://docs.djangoproject.com/en/5.0/" target="_blank" class="course-img">
									<img src="./img/django.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://docs.djangoproject.com/en/5.0/" target="_blank" style="font-size:18px; text-align: center"><b>Django Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
								<!-- single course -->
								<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://flask.palletsprojects.com/en/3.0.x/" target="_blank" class="course-img">
									<img src="./img/flask.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://flask.palletsprojects.com/en/3.0.x/" target="_blank" style="font-size:18px; text-align: center"><b>Flask Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
								<!-- single course -->
								<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.geeksforgeeks.org/express-js/" target="_blank" class="course-img">
									<img src="./img/express.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.geeksforgeeks.org/express-js/" target="_blank" style="font-size:18px; text-align: center"><b>Express.js</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						
						
						
						

						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
