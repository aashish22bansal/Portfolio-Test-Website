<?php
	// Including the datbase.
	require("includes/db.php");
	/*
		Accoding to this function, if the file db.php is not present, then the website will not work.
	*/
	include("functions/functions.php");
	// Creating a Query
	$query_list_of_EducationCategory = "SELECT DISTINCT EducationCategory FROM Education";
    $query_UnderGraduate_Subject_Data = "SELECT * FROM Subjects_Undergraduate";
    $query_PreUniversity_Subject_Data = "SELECT * FROM Subjects_Pre_University";
    $query_Matriculation_Subject_Data = "SELECT * FROM Subjects_Matriculation";

	// Executing a Query
	$run_list_of_EducationCategory  = mysqli_query($connection,$query_list_of_EducationCategory);
    $run_UnderGraduate_Subject_Data = mysqli_query($connection,$query_UnderGraduate_Subject_Data);
    $run_PreUniversity_Subject_Data = mysqli_query($connection,$query_PreUniversity_Subject_Data);
    $run_Matriculation_Subject_Data = mysqli_query($connection,$query_Matriculation_Subject_Data);
	
	// Fetching the Data
	$user_data_list_of_EducationCategory  = mysqli_fetch_array($run_UnderGraduate_Subject_Data);
    $user_data_list_of_PreUniversity = mysqli_fetch_array($run_PreUniversity_Subject_Data);
    $user_data_list_of_Matriculation = mysqli_fetch_array($run_Matriculation_Subject_Data);
    // print_r(mysqli_fetch_array($run_UnderGraduate_Subject_Data));
	// if ($result = $db -> query($query_list_of_EducationCategory)) {
    //     while ($obj = $result -> fetch_object()) {
    //         printf("%s \n", $obj->EducationCategory);
    //     }
    //     $result -> free_result();
    // }
      

	// // Checking the obtained Data
	// print_r($run_UnderGraduate_Subject_Data);
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
                                    if ($result = $connection -> query($query_list_of_EducationCategory)) {
                                        while ($obj = $result -> fetch_object()) {
                                            printf("<li><a href='#%s'>%s</a></li> \n", $obj->EducationCategory, $obj->EducationCategory);
                                        }
                                        $result -> free_result();
                                    }
                                ?>
                                <!-- <li><a href="#VIT">Bachelor's Degree</a></li>
                                <li><a href="#Pre-University">Pre-University</a></li>
                                <li><a href="#Matriculation">Matriculation</a></li> -->
                                
							</ul>
						</nav>
					</div>
					<div class="col-md-9">
						<div id="page-1" class= "page one">
							<h2 class="heading">Education</h2>
							<div id="VIT" class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<!--span class="flaticon-ideas"></span-->
									<img src="images/vit.png" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="date">2019-2023</span>
									<h2>Bachelor of Technology</h2>
									<span class="position">Vellore Institute of Technology, Vellore</span>
									<p><h6>Information Technology</h6><br>CGPA : 8.58</p>
									<p>
										<table>
											<!--The table header is created using the "thread".-->
											<thead><!--This is used for table head.-->
												<tr>
													<!-- <th>S. No.</th> -->
													<th>Course Code</th>
													<th>Course Title</th>
													<th>Course Type</th>
													<th>Semester</th>
													<th>Credits</th>
													<th>Course Distribution</th>
												</tr>
												<!--th>Breed</th-->
											</thead>
											<tbody>
												<!-- <tr> -->
                                                    <?php
                                                        // if ($result = $mysqli -> query($run_UnderGraduate_Subject_Data)) {
                                                        //     print_r($result);
                                                            // Display field lengths
                                                            while($row = mysqli_fetch_array($run_UnderGraduate_Subject_Data)) {
                                                                // $subject_undergraduate_id = $row['id'];
																$subject_undergraduate_CourseCode = $row['CourseCode'];
																$subject_undergraduate_CourseTitle = $row['CourseTitle'];
																$subject_undergraduate_CourseType = $row['CourseType'];
																$subject_undergraduate_Semester = $row['Semester'];
																$subject_undergraduate_Credits = $row['Credits'];
																$subject_undergraduate_CourseDistribution = $row['CourseDistribution'];
																
																
																
																// echo "<tr><td> $subject_undergraduate_id </td>";
																echo "<tr><td> $subject_undergraduate_CourseCode </td>";
																echo "<td> $subject_undergraduate_CourseTitle </td>";
																echo "<td> $subject_undergraduate_CourseType </td>";
																echo "<td> $subject_undergraduate_Semester </td>";
																echo "<td> $subject_undergraduate_Credits </td>";
																echo "<td> $subject_undergraduate_CourseDistribution </td></tr>";;
                                                            }
                                                            // $result -> free_result();
														// }
                                                    ?>
													<!-- <td>1</td>
													<td>CHY1002</td>
													<td>Environmental Sciences</td>
													<td>TH</td>
													<td>1</td>
													<td>3</td>
													<td>Non-Credit</td> -->
												<!-- </tr> -->
												
											</tbody>
										</table>
									</p>
								</div>
							</div>
							<div id="Pre-University" class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<img src="images/gear.png" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="date">2017-2019</span>
									<h2>Pre-University</h2>
									<span class="position">GEAR Innovative International School, Bangalore</span>
									<p><h6>Science</h6><br>Grades/Marks : 86.80%</p>
									<p>
										<table>
											<!--The table header is created using the "thread".-->
											<thead><!--This is used for table head.-->
												<th>Subject Code</th>
												<th>Subject Name</th>
												<!--th>Breed</th-->
											</thead>
											<tbody>
<!--												<tr><This is used to create a row of the table.-->
<!--													<td>041</td><This is used to add data to the rows of the table.-->-->
<!--													<td>Mathematics</td>-->
<!--												</tr>-->
                                                <?php
                                                    // if ($result = $mysqli -> query($run_UnderGraduate_Subject_Data)) {
                                                    //     print_r($result);
                                                    // Display field lengths
                                                    while($row = mysqli_fetch_array($run_PreUniversity_Subject_Data)) {
                                                        // $subject_undergraduate_id = $row['id'];
                                                        $subject_PreUniversity_SubjectCode = $row['SubjectCode'];
                                                        $subject_PreUniversity_SubjectName = $row['SubjectName'];
                                                        // echo "<tr><td> $subject_undergraduate_id </td>";
                                                        echo "<tr><td> $subject_PreUniversity_SubjectCode </td>";
                                                        echo "<td> $subject_PreUniversity_SubjectName </td></tr>";;
                                                    }
                                                    // $result -> free_result();
                                                    // }
                                                ?>
											</tbody>
										</table>
									</p>
								</div>
							</div>
							<div id="Matriculation" class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<img src="images/gear.png" class="rounded-circle">
								</div>
								<div class="text pl-3">
									<span class="date">2016-2017</span>
									<h2>Matriculation</h2>
									<span class="position">GEAR Innovative International School, Bangalore</span>
									<p>CGPA : 9.4</p>
									<p>
										<table>
											<!--The table header is created using the "thread".-->
											<thead><!--This is used for table head.-->
												<th>Subject Code</th>
												<th>Subject Name</th>
												<!--th>Breed</th-->
											</thead>
											<tbody>
<!--												<tr><This is used to create a row of the table.-->
<!--													<td>041</td><This is used to add data to the rows of the table.-->
<!--													<td>Mathematics</td>-->
<!--												</tr>-->
                                                <?php
                                                    // if ($result = $mysqli -> query($run_UnderGraduate_Subject_Data)) {
                                                    //     print_r($result);
                                                    // Display field lengths
                                                    while($row = mysqli_fetch_array($run_Matriculation_Subject_Data)) {
                                                        $subject_Matriculation_SubjectCode = $row['SubjectCode'];
                                                        $subject_Matriculation_SubjectName = $row['SubjectName'];
                                                        echo "<tr><td> $subject_Matriculation_SubjectCode </td>";
                                                        echo "<td> $subject_Matriculation_SubjectName </td></tr>";;
                                                    }
                                                    // $result -> free_result();
                                                    // }
                                                ?>
											</tbody>
										</table>
									</p>
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
