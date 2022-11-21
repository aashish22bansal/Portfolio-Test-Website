<?php
    require('includes/db.php');
    require('functions/functions.php');

	// $query_certificates = "SELECT * FROM certificates";
	// $run_certificates = mysqli_query($connection, $query_certificates);
	// $user_data_certificates = mysqli_fetch_all($run_certificates);
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
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <?php
            require("includes/navbar.php");
        ?>
		<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div id="page-2" class= "page two">
							<h2 class="heading">Certificates</h2>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<!--<span class="flaticon-ideas"></span>-->
									<img src="images/Hackerrank.png" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="date">September 11, 2020</span>
									<h2>Java (Basic)</h2>
									<span class="position"><a href="https://www.hackerrank.com/aashish22bansal" class="r-link" rel="noopener noreferrer" target="_blank">HackerRank</a></span>
									<p><a href="https://drive.google.com/file/d/1nF7DjjoCKis0aX-2r-DCW_n0Fw72s6rW/view?usp=sharing"><img src="Certificates/HackerRank/HackerRank Java Basic.jpg" width="50%"></a></p>
									<p> Assessment Cleared</p>
								</div>
							</div>
							<br>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<!--<span class="flaticon-ideas"></span>-->
									<img src="images/Hackerrank.png" width="65px" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="date">September 15, 2020</span>
									<h2>Java (Intermediate)</h2>
									<span class="position"><a href="https://www.hackerrank.com/aashish22bansal" class="r-link" rel="noopener noreferrer" target="_blank">HackerRank</a></span>
									<p><a href="https://drive.google.com/file/d/10hNTh73a1uPOU0wyrmSAyLmvK7CzLcfP/view?usp=sharing"><img src="Certificates/HackerRank/HackerRank Java Intermediate.jpg" width="50%"></a></p>
									<p> Assessment Cleared</p>
								</div>
							</div>
							<br>
							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<!--<span class="flaticon-ideas"></span>-->
									<img src="images/neo.png" width="65px" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="date">September 15, 2020</span>
									<h2>National Engineering Olympiad</h2>
									<span class="position"><a href="https://nationalolympiad.org/student-dashboard/" class="r-link" rel="noopener noreferrer" target="_blank">NEO</a></span>
									<table>
										<tr>
											<td>
												<p>
													<a href="https://drive.google.com/file/d/1JEHBHyv9Y2t6csntfyqLgCayfWbqsDdx/view?usp=sharing" target="_blank">
														<img src="Certificates/NEO5/student-participation-certificate_page-0001.jpg" width="80%">
													</a>
												</p>
											</td>
											<td>
												<p>
													<a href="https://drive.google.com/file/d/1yWDfJYCbwXuxV5pyvjAquVUZtKlIpX0K/view?usp=sharing" target="_blank">
														<img src="Certificates/NEO5/student-round1-certificate_page-0001.jpg" width="80%">
													</a>
												</p>
											</td>
										</tr>
										<tr>
											<td>Participation Certificate</td>
											<td>Round 1 Certificate</td>
										</tr>
									</table>
									
									<p><b> AIR 234</b></p>
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
