<?php
    require('includes/db.php');
    require('functions/functions.php');

    $query_courses_company_list = "SELECT * FROM courses_company_list";
    $run_courses_company_list = mysqli_query($connection, $query_courses_company_list);
    $user_data_courses_company_list = mysqli_fetch_all($run_courses_company_list);

    $query_courses = "SELECT * FROM courses_list";
    $run_courses = mysqli_query($connection, $query_courses);
    $user_data_courses = mysqli_fetch_all($run_courses);
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
					<div id="page-10" class= "page ten">
                        <h2 class="heading">Courses</h2>
                        <?php
                        foreach($user_data_courses_company_list as $company_name){
                            // $count = 1;
                        ?>
                            <div class="resume-wrap d-flex ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <!--<span class="flaticon-ideas"></span>-->
                                    <img src="<?php print($company_name[2]); //CompanyImagePath?>" class="rounded-circle">
                                </div>
                                <div class="text pl-3">
                                    <h2><a href="<?php print($company_name[3]); //CompanyLink ?>" rel="noopener noreferrer" target="_blank"><?php print($company_name[1]); //CompanyName ?></a></h2>
                                    <p>
                                        <table style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <td>S. No.</td>
                                                    <td class="widthTitle">Course Title</td>
                                                    <td>Date</td>
                                                    <td>Credential</td>
                                                    <td>Certificate</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                foreach($user_data_courses as $course){
                                                    
                                                    if($course[4] == $company_name[1]){
                                                ?>
                                                        <tr>
                                                            <td><?php print($count); ?></td>
                                                            <td><?php print($course[3]); //CourseTitle ?></td>
                                                            <td><?php print($course[1]); //CourseCompletionMonth ?> <?php print($course[2]); //CourseCompletionYear ?></td>
                                                            <td><?php print($course[0]); //CourseCertificateID ?></td>
                                                            <td>
                                                                <a href="<?php print($course[5]); //CertificateLink ?>" target="_blank">
                                                                    <img src="<?php print($course[6]); //CertificateCompanyImageName ?>" width="25%"/>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                        $count++;
                                                    }
                                                    else{
                                                        // nothing to print
                                                    }
                                                    
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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