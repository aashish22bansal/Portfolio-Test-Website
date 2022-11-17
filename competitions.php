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

						<div id="page-12" class= "page eleven">
							<h2 class="heading">Certificate of Participation</h2>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<img src="images/rtu-hack.png" class="rounded-circle">
								</div>
								
								<div class="text pl-3">
									<span class="t-title">Technical Hackathon</span>
									<ol>
										<li><h2>VIT E-Cell HackerTech 2019</h2></li>
										<p>Tried to build an app to daily work analysis.</p>
										<li><h2>Winner - VIT IEEE-MTTS ChatBots & ML 2019</h2></li>
										<p>Built a ChatBot providing quick emergency services to public.</p>
									</ol>
									<span class="t-title">Business Hackathon</span>
									<ol>
										<li><h2>VIT E-Cell HackerTech 2019</h2></li>
										<p>Tried to build an app to daily work analysis.</p>
									</ol>
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
