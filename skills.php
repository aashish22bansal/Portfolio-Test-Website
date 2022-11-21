<?php
    require('includes/db.php');
    require('functions/functions.php');
    // $query_industry_skill_categories = "SELECT * FROM industryskillcategories";
    // $run_industry_skill_categories = mysqli_query($connection, $query_industry_skill_categories);
    // $user_data_industry_skill_categories = mysqli_fetch_all($run_industry_skill_categories);
    // //print_r($user_data_project_categories);
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
		<!--
			<section class="ftco-section ftco-partner">
				<div class="container">
					<div class="row">
						<div class="col-sm ftco-animate">
							<a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
						</div>
						<div class="col-sm ftco-animate">
							<a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
						</div>
						<div class="col-sm ftco-animate">
							<a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
						</div>
						<div class="col-sm ftco-animate">
							<a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
						</div>
						<div class="col-sm ftco-animate">
							<a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
						</div>
					</div>
				</div>
			</section>
		-->
		<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<nav id="navi">
							<ul>
								<?php
								foreach($user_data_industry_skill_categories as $skill_category){
								?>
									<li>
										<a href="#<?php print($skill_category[2]); //SkillCategoryIDName?>">
											<?php print($skill_category[1]); //SkillCategoryName?>
										</a>
									</li>
								<?php
								}
								?>
							</ul>
						</nav>
					</div>
					<div class="col-md-9">
						<div class= "page four">
							<h2 class="heading"> Industry Knowledge</h2>
							<!--div class="row progress-circle mb-5">
								<div class="col-lg-4 mb-4">
									<div class="bg-white rounded-lg shadow p-4">
										<h2 class="h5 font-weight-bold text-center mb-4">Web Development</h2>

										<! Progress bar 1>
										<div class="progress mx-auto" data-value='75'>
											<span class="progress-left">
												<span class="progress-bar border-primary"></span>
											</span>
											<span class="progress-right">
												<span class="progress-bar border-primary"></span>
											</span>
											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
												<div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
											</div>
										</div>
										<! END >

										<! Demo info >
										<! div class="row text-center mt-4">
										<! div class="col-6 border-right">
											<! div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
										<! /div>
										<! div class="col-6">
											<! div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
										<! /div>
										<! /div>
										<! END >
									</div>
								</div>

								<div class="col-lg-4 mb-4">
									<div class="bg-white rounded-lg shadow p-4">
										<h2 class="h5 font-weight-bold text-center mb-4">Programming Skill</h2>
										<div class="progress mx-auto" data-value='80'>
											<span class="progress-left">
												<span class="progress-bar border-primary"></span>
											</span>
											<span class="progress-right">
												<span class="progress-bar border-primary"></span>
											</span>
											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
												<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 mb-4">
									<div class="bg-white rounded-lg shadow p-4">
										<h2 class="h5 font-weight-bold text-center mb-4">Data Science & Machine Learning</h2>
										<div class="progress mx-auto" data-value='65'>
											<span class="progress-left">
												<span class="progress-bar border-primary"></span>
											</span>
											<span class="progress-right">
												<span class="progress-bar border-primary"></span>
											</span>
											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
												<div class="h2 font-weight-bold">65<sup class="small">%</sup></div>
											</div>
										</div>
									</div>
								</div>
							</div-->
							<div id="Industry_Knowledge" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Data Science</h3>
										<h3>Object-Oriented Programming (OOP)</h3>
										<h3>Sports</h3>
										<h3>Artificial Intelligence (AI)</h3>
										<h3>XAMPP</h3>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Analytical Skills</h3>
										<h3>Sales and Marketing</h3>
										<h3>Deep Learning</h3>
										<h3>Web Development</h3>
										<h3>Predictive Modeling & Analysis</h3>
									</div>
								</div>
							</div>

							<h2 class="heading"> Tools & Technologies</h2>
							<div id="Tools_Technologies" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>MySQL</h3>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>PhpMyAdmin</h3>
									</div>
								</div>
							</div>

							<div class="heading"> Interpersonal Skills</div>
							<div id="Interpersonal_Skills" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Leadership</h3>
										<h3>Public Speaking</h3>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Teamwork</h3>
									</div>
								</div>
							</div>

							<div class="heading"> Other Skills</div>
							<div id="Other_Skills" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Blockchain Analysis</h3>
										<h3>Cryptocurrency</h3>
										<h3>Arduino</h3>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Competitive Coding</h3>
										<h3>Database Management System (DBMS)</h3>
									</div>
								</div>
							</div>

							<!--div class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>MySQL, XAMPP</h3>
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" aria-valuenow="60"	aria-valuemin="0" aria-valuemax="100" style="width:60%">
												<span>50%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Flask & Django</h3>
										<div class="progress">
											<div class="progress-bar color-2" role="progressbar" aria-valuenow="65"
											aria-valuemin="0" aria-valuemax="100" style="width:65%">
											<span>65%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Photoshop</h3>
										<div class="progress">
											<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
											aria-valuemin="0" aria-valuemax="100" style="width:85%">
											<span>85%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Predictive Modeling & Analytics     60%</h3>
										<div class="progress">
											<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
											aria-valuemin="0" aria-valuemax="100" style="width:60%">
											<span></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>WordPress</h3>
										<div class="progress">
											<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:70%">
											<span>70%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>SEO</h3>
										<div class="progress">
											<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
											<span>80%</span>
											</div>
										</div>
									</div>
								</div>
							</div-->
						<!-- </div>

                        <div class= "page five"> -->
							<!-- <h2 class="heading">Languages</h2> -->
							<div class="heading"> Languages</div>
							<div id="Languages" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/java.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">Java</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/c.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">C</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/html.jpg" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">HTML</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/php.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">PHP</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/r.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">R</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/SQL.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">SQL</span>
												<p><!-- --></p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/python.jpg" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">May/2020 - June/2020</span>
												<h2>Data Science</h2>-->
												<span class="position">Python</span>
												<p><!--Bengaluru, Karnataka, India--></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/c++.jpg" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">C++</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/css.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">CSS</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/js.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">JavaScript</span>
												<p><!-- --></p>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<!--<span class="flaticon-ideas"></span>-->
												<img src="images/bootstrap.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<!--<span class="date">2014-2015</span>
												<h2>Top 10 Web Developer</h2>---->
												<span class="position">BootStrap</span>
												<p><!-- --></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="heading"> Frameworks & Libraries</div>
							<div id="Frameworks_Libraries" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/jupyter.jpg" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Jupyter</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/numpy.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Numpy</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/pandas.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Pandas</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/tf-logo.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Tensorflow</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/Keras_logo.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Keras</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/arduino-logo-1.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Arduino</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/express-js-logo.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Express.js</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="heading"> Databases and Cloud Hosting</div>
							<div id="Databases_and_Cloud_Hosting" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/mysql-logo.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">MySQL</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/Oracle.jpg" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Oracle</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/MongoDB-Emblem.jpg" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">MongoDB</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/GitHub-Mark.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">GitHub Pages</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/netlify_logo.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Netlify</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="heading"> Software and Tools</div>
							<div id="Software_and_Tools" class="row">
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/android studio.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Android Studio</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/Android-Logo.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Android</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/Git-Icon-1788C.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Git</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/anaconda.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Anaconda</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/cisco.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Cisco Packet Tracer</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/IntelliJ_IDEA_Icon.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">IntelliJ</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/PyCharm_Icon.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">PyCharm</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/google-sheets-logo.png	" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">Google Sheets</span>
											</div>
										</div>

										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/wireshark-tutorial.png" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<span class="position">WireShark</span>
											</div>
										</div>
									</div>
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
