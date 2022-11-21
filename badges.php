<?php
    require('includes/db.php');
    require('functions/functions.php');

	// $query_industry_skills = "SELECT * FROM badges_skills";
	// $run_industry_skills = mysqli_query($connection, $query_industry_skills);
	// $user_data_industry_skills = mysqli_fetch_all($run_industry_skills);
	// // print_r($user_data_industry_skills);
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

		<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <?php
            require("includes/navbar.php");
        ?>
		
		<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div id="page-8" class= "page eight">
							<h2 class="heading">Learning Badges</h2>
							<div class="resume-wrap d-flex ftco-animate">
								<a href="https://www.hackerrank.com/aashish22bansal" alt="CPP badge" target="_blank">
									<img src="images/HackerRank_Badges.PNG" alt="CPP badge" height="150" width="670">
								</a>
							</div>
							<div>
								<div class="icon d-flex align-items-center justify-content-center">
								</div>
								<br>
							</div>
						</div>

						<div id="page-9" class= "page nine">
							<h2 class="heading">Skills Badge</h2>
							<div class="resume-wrap d-flex ftco-animate">
									<!-- <img src="images/mycaptain.png" class="rounded-circle"> -->
									<!--<span class="flaticon-ideas"></span>-->
							</div>
							<div>
								<?php
								foreach($user_data_industry_skills as $industry_skill){
								?>
									<div class="icon d-flex align-items-center justify-content-center">
										<?php print($industry_skill[10]); //BadgeScript ?>
										<script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
										<div class="text pl-3">
											<span class="date">
												<?php print($industry_skill[2]);//BadgeCompletionMonth  ?>/<?php print($industry_skill[3]); //BadgeCompletionYear ?>
											</span>

											<h2><?php print($industry_skill[1]); //BadgeTitle ?></h2>

											<span class="position">
												<a href="<?php print($industry_skill[5]); //BadgeIssuingCompanyLink ?>" class="r-link" rel="noopener noreferrer" target="_blank">
													<b>Issued By:</b> <?php print($industry_skill[4]); //BadgeIssuingCompanyName  ?>
												</a>
											</span>
											<br>
											<span class="position">
												<a href="<?php print($industry_skill[7]); //BadgeAuthorizationCompanyLink  ?>" class="r-link" rel="noopener noreferrer" target="_blank">
													<b>Authorized By:</b> <?php print($industry_skill[6]); //BadgeAuthorizationCompanyName ?>
												</a>
											</span>

											<p>
												<?php print($industry_skill[8]); //BadgeDescription ?>
											</p>
										</div>
									</div>
									<br>
								<?php
								}
								?>
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
