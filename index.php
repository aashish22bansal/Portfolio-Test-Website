<?php
	// Including the database.
//    include("includes/db.php");
	require("includes/db.php");
    require("functions/functions.php");
//	include("functions/functions.php");
    /*
        Accoding to these functions, if the files are not present, then the website will not work.
    */
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
									data-rotate='[ "Data Science Enthusiast.", "ML Engineer.", "Information Technology Final Year Student.", "Web Developer.", "Software Developer.", "Blockchain Enthusiast.", "eLearner."]'>
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
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h1 class="big">About</h1>
                                <h3 class="mb-4">Profiles</h3>
								<div>
									<style></style>
									<script src="https://kit.fontawesome.com/911ba10830.js" crossorigin="anonymous"></script>
									<p>
										
									</p>
								</div>
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <?php
                                        foreach($user_data_social_media as $row){
                                            $ID = $row['0'];
                                            $Platform_Username = $row['1'];
                                            $URL = $row['2'];
                                            $Username = $row['4'];
                                            $Control = $row['3'];
                                            if($Control==1){
                                    ?>
                                                <li class="d-flex">
                                                    <span> <?php print("$Platform_Username"); ?> </span>
                                                    <span >
                                                        <button class="btn btn-primary py-3 px-3">
                                                            <a href="<?php print($URL); ?>" target="_blank">
                                                                <span style="text-decoration-color: white"> <?php print("$Username"); ?> </span>
                                                            </a>
                                                        </button>
                                                    </span>
                                                </li>
                                    <?php
                                            }
                                        }
                                    ?>
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
					<!-- <br> -->
					<div class="col-lg-3 d-flex" >
						<div class="img-about img d-flex align-items-stretch">
							<div class="overlay"></div>
							<div class="img d-flex align-self-stretch align-items-center"><!--style="background-image:url(images/about.jpg);" 
								<style type="text/css">
									[data-size="large"] {
									}

								</style-->
								<!-- <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="aashish22bansal">
									<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
									<a class="LI-simple-link" href='https://www.linkedin.com/in/aashish22bansal/'>AASHISH BANSAL</a>
								</div> -->
								
							</div>
						</div>
					</div>
					<?php
					// $allowed_hosts = array('localhost');
					// if (isset($_SERVER['HTTP_HOST']) || in_array($_SERVER['HTTP_HOST'], $allowed_hosts)) {
					// 	// header($_SERVER['SERVER_PROTOCOL'].' 400 Bad Request');
					// 	// exit;
					// 	print("hkugkugukgyugukygyukgkhujbyhjvyhjvj");
					// }
					// header("Content-Type: image/jpeg");
					// header("Content-Length: " . filesize("$user_data_personal_details[0][16]"));
					// readfile("$user_data_personal_details[0][16]"); 
					?>
					<div class="col-lg-3 pl-md-5 py-5">
						<div class="card" style="width: 23rem;">

							<img class="card-img-top" src="images/" alt="Card image cap" /><?php print($user_data_personal_details[0][16]);?>
							<div class="card-body">
								<h5 class="card-title">Contact Me</h5>
								<p class="card-text"><?php print($user_data_personal_details[0][14]); ?></p>
								<a href="contact.php" class="btn btn-primary" target="_blank">Contact me</a>
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
