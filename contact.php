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
		<title><?php print($user_data_home['Title']); ?></title>
		<?php
            require("includes/head.php");
        ?>
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <?php
            require("includes/navbar.php");
        ?>



		<section class="ftco-section ftco-hireme img" style="background-image: url(images/bg_1.jpg)">
			<div class="overlay"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-7 ftco-animate text-center">
							<h2>I'm <span>Available</span> for freelancing</h2>
							<p><!-- --></p>
							<p class="mb-0"><a href="#Contact-me" class="btn btn-primary py-3 px-5">Hire me</a></p>
						</div>
					</div>
				</div>
			</section>

		<section id="Contact-me" class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Contact</h1>
				<h2 class="mb-4">Contact Me</h2>
				<p><!-- --></p>
			</div>
			</div>

			<div class="row d-flex contact-info mb-5">
			<div class="col-lg-4 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-map-signs"></span>
					</div>
					<div>
						<h3 class="mb-4">Address</h3>
						<p>Punjab, India, (ZIP Code: 152107)</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 d-flex ftco-animate">
				<div class="align-self-stretch text-center p-4 box shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<img src="images/w.png">
					</div>
					<div>
						<h3 class="mb-4">Whatsapp Chat</h3>
						<p><a href="https://api.whatsapp.com/send?phone=917829140001"  rel="noopener noreferrer" target="_blank">Start Chat</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:aashish22bansal@gmail.com">aashish22bansal@gmail.com</a></p>
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
