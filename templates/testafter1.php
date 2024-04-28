<html>
<head>
  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Career Guidance System</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		
<link rel="stylesheet" href="../static/chart.css">
<link rel="stylesheet" href="../static/css1/bootstrap.min.css">
<link rel="stylesheet" href="../static/css1/font-awesome.min.css">
<link rel="stylesheet" href="../static/css1/s.css">

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
</head>
<body style="background-color:#b7a2e9d4;">
<!--Header-->
        <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/main.php" style="margin-left:-150px">Career.io</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>

				<!-- Navigation -->
				
				<?php else: ?>
					<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/main.php">Home</a></li>
						<li><a href="#about">About Us</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span> &#11167;</span></a>
                            <div class="dropdown-content">
								<a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/login.php">Career Prediction</a>
                                <a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/courses.php">Courses</a>
                                <!--<a href="http://127.0.0.1/php%20CAREERLY/blog.php">Blogs</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/daily_bytes.php">Daily bytes</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/community.php">Community</a>-->
								<a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/blog.php">Knowledge Network</a>
								<a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/faq.php">FAQs</a>
                            </div>
                        </li>
						
						<li><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/contact.php">Contact Us</a></li>
						<li><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/logout.php" >Log out</a></li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php endif ?>

			</div>
		</header>
	
   <br><br><br><br><br><br><br>
   <b><h1>Hey! The top job roles that matched your skills.....</h1><br><br></b>
   <div class="graph-cont">
   <h1>You can be a great:</h1>
   <!-- <div class="bar bar1" ><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/blog.php" style="text-decoration: none;"><font color="white">{{ job0 }}</a></font></div><br> -->
   <div class="bar bar1" ><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/blog.php" style="text-decoration: none;"><font color="white">Career choice-1</a></font></div><br>
	
		
<!-- 
	 {%for key, value in final_res.items(): %}
		{%if job0!=job_dict[value]%} -->
	
	  
	 
	
		 <!-- <div class="bar bar2"><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/blog.php" style="text-decoration: none;"><font color="white">{{job_dict[value]}}</a></font></div><br> -->
		 <div class="bar bar2"><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/blog.php" style="text-decoration: none;"><font color="white">Career choice-2</a></font></div><br>

	 
	 
	 
		
		
					<!--<div class="bar bar2"><a href="#" style="text-decoration: none;"><font color="white">{{job_dict[value]|e}}</a></font></div><br> --> 
		              

		<!--	<div class="bar bar2"><a href="#" style="text-decoration: none;"><font color="white">{{job_dict[value]}}</a></font></div><br>  
		
		-->

		<!-- {%endif%}
	 {%endfor%} -->
	 
	
	<i><h2><p><a href="http://localhost/CAREER-GUIDANCE-SYSTEM-MAIN/blog.php">To know more about these job roles click here!</a></p></h2></i>
	 
	 
	 
	 
	
	 
	 
	 
      
   <!--<div class="bar bar2"><a href="#" style="text-decoration: none;"><font color="white">{{ job1 }}</a></font></div><br>
   <div class="bar bar3" ><a href="#" style="text-decoration: none;"><font color="white">{{ job2 }}</a></font></div><br>
   <div class="bar bar4"><a href="#" style="text-decoration: none;"><font color="white">{{ job3 }}</a></font></div><br>-->
	
  </div>
  <br><br><br><br><br><br><br>
  <!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="main.php">Career.io</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->
					</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

</body>
</html>
<!--

           
      #print(jobs_dict[predictions[0]])
      job = {}
      #job[0] = jobs_dict[predictions[0]]
      index = 1
     #

-->




