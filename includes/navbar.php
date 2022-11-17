        <?php
			require("functions/functions.php");
		?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php"><span>A</span>ashish Bansal</a>
				<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>
				<?php 
					if($user_data_home['ShowIcones']){
				?>
						<div class="collapse navbar-collapse" id="ftco-nav">
							<ul class="navbar-nav nav ml-auto">
								<?php 
									if($user_data_section_control['Home']){
								?>
										<li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Education']){
										
								?>
										<li class="nav-item"><a href="education.php" class="nav-link"><span>Education</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Experience']){
								?>
										<li class="nav-item"><a href="experience.php" class="nav-link"><span>Experience</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Projects']){
										
								?>
										<li class="nav-item"><a href="projects.php" class="nav-link"><span>Projects</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Skills_n_Languages']){
										
								?>
										<li class="nav-item"><a href="skills.php" class="nav-link"><span>Skills & Languages</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Badges']){
										
								?>
										<li class="nav-item"><a href="badges.php" class="nav-link"><span>Badges</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Certificates']){
										
								?>
										<li class="nav-item"><a href="certificates.php" class="nav-link"><span>Certificates</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Courses']){
										
								?>
										<li class="nav-item"><a href="courses.php" class="nav-link"><span>Courses</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Organizations']){
										
								?>
										<li class="nav-item"><a href="organization.php" class="nav-link"><span>Organizations</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Competitions']){
										
								?>
										<li class="nav-item"><a href="competitions.php" class="nav-link"><span>Competitions</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Resume_Link']){
										
								?>
										<li class="nav-item">
											<a href="<?php print($user_data_home['Link_Resume']); ?>" class="nav-link" target="_blank">
												<span>Resume</span>
											</a>
										</li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['Contact']){
										
								?>
										<li class="nav-item"><a href="contact.php" class="nav-link"><span>Contact Me</span></a></li>
								<?php
									}
								?>
								
							</ul>
							
						</div>

				<?php 
					} // end of if($user_data_home['ShowIcones'])
				?>
				
			</div>
		</nav>