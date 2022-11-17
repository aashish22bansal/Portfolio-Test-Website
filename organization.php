<?php
    require('includes/db.php');
    require('functions/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-PS3GYE4L52"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-PS3GYE4L52');
		</script>
		<title><?php print($user_data_home[1]); ?></title>
		<?php
            require("includes/head.php");
        ?>
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php
            require("includes/navbar.php");
        ?>
		<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div id="page-11" class= "page eleven">
							<h2 class="heading">Organizations</h2>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<img src="images/Rotary Bangalore.jpg" width="50px" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="t-title">Rotary Bangalore</span>
									<ul>
										<li><h2>Member</h2></li>
										<p>Aug/2016 - Mar/2017</p>
										<li><h2>Core Committee Member</h2></li>
										<p>Aug/2017 - Dec/2018</p>
									</ul>
								</div>
							</div>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<img src="images/PLA.png" width="50px" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="t-title">Punjabi Literary Association</span>
									<ul>
										<li><h2>Member</h2></li>
										<p>Oct/2020 - Aug/2021</p>
									</ul>
									<ul>
										<li><h2>Core Member</h2></li>
										<p>Aug/2021 - Dec/2021</p>
									</ul>
									<ul>
										<li><h2>Finance Head</h2></li>
										<p>Jan/2022 - Present</p>
									</ul>
									<!--
									<span class="position">Great Lakes E-Learning Services Private Limited</span>
									<p><h6>2nd Floor, Orchid Centre, Golf Course Road, Sector-53, Gurugram.</h6></p>
									-->
								</div>
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
