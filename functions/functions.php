<?php
// /*
// THIS PAGE IS DESIGNED TO FETCH ALL THE DATA FROM THE ENTIRE DATABASE
// AT ONCE SO THAT ALL THE DATA IS PRESENT WHEN THE WEBSITE IS FIRST LOADED
// IN AN ATTEMPT TO IMPROVE THE PERFORMANCE OF THE WEBSITE.
// */
// /*INDEX PAGE*/
// // Creating a Query
//$query_section_control = "SELECT * FROM Section_Control";
//$query_social_media = "SELECT * FROM Social_Media";
// $query_badges = "SELECT * FROM badges";
// $query_certificates = "SELECT * FROM certificates";
// $query_courses = "SELECT * FROM courses";
// $query_education = "SELECT * FROM education";
// $query_experience = "SELECT * FROM experience";
//$query_home = "SELECT * FROM HOME";
// $query_industryskills = "SELECT * FROM industryskills";
// // $query_

// // Executing a Query
//$run_home = mysqli_query($connection,$query_home);
//$run_section_control = mysqli_query($connection,$query_section_control);
//$run_social_media = mysqli_query($connection,$query_social_media);

// // Fetching the Data
//$user_data_home = mysqli_fetch_array($run_home);
//$user_data_section_control = mysqli_fetch_array($run_section_control);
//$user_data_social_media = mysqli_fetch_array($run_social_media);

// // Checking the obtained Data
// // print_r($user_data_home);
// // print_r($user_data_section_control);
// // print_r($user_data_social_media);


// // FETCHING THE UNDERGRADUATE SUBJECTS
// // Creating a Query
// $query_list_of_EducationCategory = "SELECT DISTINCT EducationCategory FROM education";
// $query_UnderGraduate_Subject_Data = "SELECT * FROM subjects_undergraduate";

// // Executing a Query
// $run_list_of_EducationCategory  = mysqli_query($db,$query_list_of_EducationCategory);
// $run_UnderGraduate_Subject_Data  = mysqli_query($db,$query_UnderGraduate_Subject_Data);

// // Fetching the Data
// // $user_data_list_of_EducationCategory  = mysqli_fetch_array($run_UnderGraduate_Subject_Data);
// // if ($result = $db -> query($query_list_of_EducationCategory)) {
// //     while ($obj = $result -> fetch_object()) {
// //         printf("%s \n", $obj->EducationCategory);
// //     }
// //     $result -> free_result();
// // }


// // Checking the obtained Data
// // print_r($run_UnderGraduate_Subject_Data);
?>