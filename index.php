<?php
	// Including the datbase.
	require("includes/db.php");
    require("functions/functions.php");
	/*
		Accoding to this function, if the file db.php is not present, then the website will not work.
	*/
	include("functions/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php print($user_data_home['Title']); ?></title>
		<?php require("includes/head.php"); ?>
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
		<?php require("includes/navbar.php"); ?>
		<section class="hero-wrap js-fullheight">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
					<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
						<div class="text text-center">
							<span class="subheading">Hey! I am</span>
							<h1><?php print($user_data_home['Title']); ?></h1>
							<h2>I'm a 
								<span
									class="txt-rotate"
									data-period="500"
									data-rotate='[ "Data Science Enthusiast.", "ML Engineer.", "Information Technology Pre-final.", "Web Developer.", "Software Developer.", "Blockchain Enthusiast.", "eLearner."]'>
								</span>
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="mouse">
				<a href="#" class="mouse-icon" title="Skip to main content">
					<div class="mouse-wheel">
						<span class="ion-ios-arrow-round-down"></span>
					</div>
				</a>
			</div>
		</section>

		<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb justify-content-center" id="about-section">
			<div class="container">
				<div class="row d-flex no-gutters">
					<div class=" col-lg-5 pl-md-5 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<h1 class="big">About</h1>
								<h2 class="mb-4">About Me</h2>
								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Name:</span> <span><?php print($user_data_home['Title']); ?></span></li>
									<li class="d-flex"><span>Date of birth:</span> <span><?php print($user_data_home['DoB']); ?></span></li>
									<li class="d-flex"><span>Address:</span> <span><?php print($user_data_home['Address']); ?></span></li>
									<li class="d-flex"><span>Zip code:</span> <span><?php print($user_data_home['ZIP_Code']); ?></span></li>
									<li class="d-flex"><span>Email:</span> <span><?php print($user_data_home['Email']); ?></span></li>
									<li class="d-flex"><span>Phone: </span> <span>+91-<?php print($user_data_home['Phone']); ?></span></li>
								</ul>
							</div>
						</div>
						<div class="counter-wrap ftco-animate d-flex mt-md-3" style="padding-top: 50px;">
							<div class="text">
								<p class="mb-4">
									<span class="number" data-number="23">0</span>
									<span>Projects complete</span>
								</p>
								<p><a href=<?php print($user_data_home['Link_Resume']); ?> class="btn btn-primary py-3 px-3"  target="_blank">Download/View Resume</a></p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 d-flex" >
						<div class="img-about img d-flex align-items-stretch">
							<div class="overlay"></div>
							<div class="img d-flex align-self-stretch align-items-center"><!--style="background-image:url(images/about.jpg);" 
								<style type="text/css">
									[data-size="large"] {
									}
									-->
								</style>
								<!-- <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="aashish22bansal">
									<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
									<a class="LI-simple-link" href='https://www.linkedin.com/in/aashish22bansal/'>AASHISH BANSAL</a>
								</div> -->
							</div>
						</div>
					</div>
					<div class="col-lg-3 pl-md-5 py-5">
						<div class="card" style="width: 23rem;">
							<img class="card-img-top" src="images/Aashish2.jpeg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Contact me</h5>
								<p class="card-text"><?php print($user_data_home['Subtitle']); ?></p>
								<a href="contact.html" class="btn btn-primary">Contact me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<?php
			require("includes/footer.php");
			require("includes/foot.php");
		?>
		
	</body>
</html>
