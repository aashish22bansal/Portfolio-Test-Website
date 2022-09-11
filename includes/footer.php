<!-- FOOTER -->
        <footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget">
					<h2 class="ftco-heading-2">Let's be internet BFFs</h2>
					<ul class="ftco-footer-social list-unstyled">
						<li class="ftco-animate"><a href="<?php $user_data_home['Link_LinkedIn'] ?>"   rel="noopener noreferrer" target="_blank"><span class="icon-linkedin"></span></a></li>
						<li class="ftco-animate"><a href="<?php $user_data_home['Link_Facebook'] ?>"   rel="noopener noreferrer" target="_blank"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="<?php $user_data_home['Link_Instagram'] ?>"  rel="noopener noreferrer" target="_blank"><span class="icon-instagram"></span></a></li>
						<li class="ftco-animate"><a href="mailto:<?php print($user_data_home['Email']); ?>"><span class="icon-google"></span></a></li>
						<li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=91<?php print($user_data_home['Phone']); ?>"  rel="noopener noreferrer" target="_blank"><span class="icon-whatsapp"></span></a></li>
					</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Hire me</h2>
					<ul class="list-unstyled">
						<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Science Enthusiast</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Machine Learning Engineer</a></li>
						<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Information Technology Pre-final</a></li>
						<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
						<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
						<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blockchain</a></li>
					</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text"><?php print($user_data_home['Address']); ?>.</span></li>
							<li><a href="tel://+917829140001"><span class="icon icon-phone"></span><span class="text">+91-<?php print($user_data_home['Phone']); ?></span></a></li>
							<li><a href="mailto:aashish22bansal@gmail.com"><span class="icon icon-envelope"></span><span class="text"><?php print($user_data_home['Email']); ?></span></a></li>
						</ul>
						</div>
					</div>
				</div>
				</div>

			</div>
		</footer>