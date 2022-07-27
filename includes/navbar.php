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
					if($user_data_home['showicons']){
				?>
						<div class="collapse navbar-collapse" id="ftco-nav">
							<ul class="navbar-nav nav ml-auto">
								<?php 
									if($user_data_section_control['home']){	
								?>
										<li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['education']){
										
								?>
										<li class="nav-item"><a href="education.php" class="nav-link"><span>Education</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['experience']){
								?>
										<li class="nav-item"><a href="experience.html" class="nav-link"><span>Experience</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['projects']){
										
								?>
										<li class="nav-item"><a href="projects.html" class="nav-link"><span>Projects</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['skills_languages']){
										
								?>
										<li class="nav-item"><a href="skills.html" class="nav-link"><span>Skills & Languages</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['badges']){
										
								?>
										<li class="nav-item"><a href="badges.html" class="nav-link"><span>Badges</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['certificates']){
										
								?>
										<li class="nav-item"><a href="certificates.html" class="nav-link"><span>Certificates</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['courses']){
										
								?>
										<li class="nav-item"><a href="courses.html" class="nav-link"><span>Courses</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['organizations']){
										
								?>
										<li class="nav-item"><a href="organization.html" class="nav-link"><span>Organizations</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['competitions']){
										
								?>
										<li class="nav-item"><a href="competitions.html" class="nav-link"><span>Competitions</span></a></li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['resume']){
										
								?>
										<li class="nav-item">
											<a href="https://drive.google.com/file/d/1DthhTrXY11O14l2EvQvG1CsTNJoElosS/view?usp=sharing" class="nav-link">
												<span>Resume</span>
											</a>
										</li>
								<?php
									}
								?>

								<?php 
									if($user_data_section_control['contact']){
										
								?>
										<li class="nav-item"><a href="contact.html" class="nav-link"><span>Contact Me</span></a></li>
								<?php
									}
								?>
								
							</ul>
							
						</div>

				<?php 
					} // end of if($user_data_home['showicons'])
				?>
				
			</div>
		</nav>