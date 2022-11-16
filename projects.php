<?php
    require('includes/db.php');
    require('functions/functions.php');
    $query_project_categories = "SELECT * FROM project_categories";
    $run_project_categories = mysqli_query($connection, $query_project_categories);
    $user_data_project_categories = mysqli_fetch_all($run_project_categories);
    //print_r($user_data_project_categories);

	$query_projects = "SELECT * FROM projects";
	$run_projects = mysqli_query($connection, $query_projects);
	$user_data_projects = mysqli_fetch_all($run_projects);
	//print_r($user_data_projects);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
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
					<div class="col-md-3">
						<nav id="navi">
							<ul>
								<?php
								foreach($user_data_project_categories as $row){
								?>
									<li><a href="#<?php print($row[2]);?>"><?php print($row[1]);?></a></li>
								<?php
								}
								?>
							</ul>
						</nav>
					</div>
					<div class="col-md-9">
						<div id="page-3" class= "page three">
							<h2 class="heading">Projects</h2>
							<?php
							foreach($user_data_project_categories as $project_category){
								foreach($user_data_projects as $project){
							?>
									<div id="<?php print($project_category[2]); //ProjectCategoryIDName?>" class="resume-wrap d-flex ftco-animate">
										<div class="resume-wrap d-flex ftco-animate">
											<div class="icon d-flex align-items-center justify-content-center">
												<img src="images/<?php print((string)$project_category[3]); //ProjectCategoryImageName?>" class="rounded-circle">
											</div>
											<div class="text pl-3">
												<h3 class="heading">
													<?php print($project_category[1]); //ProjectCategoryName?>
												</h3>
												<div id="<?php print($project[1]); //'ProjectCode'?>">
													<span class="date">
														<?php print($project[2]); //'CompletionMonth'?>, <?php print($project[3]); //'CompletionYear'?>
													</span>
													<h2><?php print($project[4]); //'TitleOfProject'?></h2>
													<span class="position">
														<?php print($project[5]); //'Company'?>
													</span>
													<p>
														<h6>
															<?php print($project[8]); //'ProjectType'?>
														</h6>
													</p>
														<br>
													<p>
														<?php print($project[9]); //'ProjectDescription' ?>
													</p>
													<p>Link: 
														<a href="<?php print($project[11]); //'ProjectCodeLink'?>">
															<?php print($project[10]); //'ProjectCodeLocation'?>
														</a>
													</p>
													<p>Document: 
														<a href="<?php print($project[13]); //'ProjectDocumentLink'?>">
															<?php print($project[12]); //'ProjectDocumentLocation'?>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
							<?php
								}
							}
							?>
							<!-- End Projects -->
							
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
