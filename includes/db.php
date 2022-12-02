<?php
    /*
        THIS PAGE IS DESIGNED TO FETCH ALL THE DATA FROM THE ENTIRE DATABASE
        AT ONCE SO THAT ALL THE DATA IS PRESENT WHEN THE WEBSITE IS FIRST LOADED
        IN AN ATTEMPT TO IMPROVE THE PERFORMANCE OF THE WEBSITE.
     */

    // Assigning Database Attributes to variables
    $servername = "localhost"; //"127.0.0.1:3307";
    $username = "root"; //"id19547945_root";
    $password = ""; //"AHgx=Wf0SXxCU5w~";
    $databaseName = "id19547945_myportfolio"; //"id19547945_myportfolio";

    //starting a session
    session_start();

    //removing error reporting
    // error_reporting(0);

    // Creating a Connection
    $connection = new mysqli($servername, $username, $password, $databaseName);
    // $conn = new mysqli('localhost','root',$password,$databaseName);
    // $mysqli = new mysqli($servername,$username,$password,$databaseName);
    // $db = mysqli_connect($servername,$username,$password,$databaseName) or die("Database Not Found!");

    // Assigning Character set
    //$connection->set_charset('utf8mb4');


    // Selecting a Database
    $connection -> select_db($databaseName);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    //echo "Successfully created the connection";
    if($connection->connect_errno){
        echo "Failed to connect to MySQL: ".$connection->connect_error;
    }


    /*
     * INCLUDING ALL THE DATA INTO THE WEBSITE
     */

    /*INDEX PAGE*/
    // Creating Queries
    $query_home = "SELECT * FROM HOME WHERE ID=1";
    $query_section_control = "SELECT * FROM Section_Control WHERE ID=1";
    $query_social_media = "SELECT * FROM Social_Media";
    // $query_badges = "SELECT * FROM badges";
    // $query_certificates = "SELECT * FROM certificates";
    // $query_courses = "SELECT * FROM courses";
    // $query_education = "SELECT * FROM education";

    // $query_industryskills = "SELECT * FROM industryskills";

    // Executing Queries
    $run_home = mysqli_query($connection,$query_home);
    $run_section_control = mysqli_query($connection,$query_section_control);
    $run_social_media = mysqli_query($connection,$query_social_media);


    // Fetching the Data
    $user_data_home = mysqli_fetch_array($run_home);
    $user_data_section_control = mysqli_fetch_array($run_section_control);
    $user_data_social_media = mysqli_fetch_all($run_social_media);

    $query_personal_details = "SELECT * FROM $databaseName.personal_details WHERE email='analyst.aashish@gmail.com';";
    $run_query_personal_details = mysqli_query($connection, $query_personal_details);
    $user_data_personal_details = mysqli_fetch_all($run_query_personal_details);


    // Checking the obtained Data
    // print_r($user_data_home);
    // print_r($user_data_section_control);
    // print_r($user_data_social_media);
//    foreach($user_data_social_media as $value){
//        print_r($value);
//        print("<br>");
//    }


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

    $query_industry_skills = "SELECT * FROM badges_skills";
	$run_industry_skills = mysqli_query($connection, $query_industry_skills);
	$user_data_industry_skills = mysqli_fetch_all($run_industry_skills);
	// print_r($user_data_industry_skills);

    $query_certificates = "SELECT * FROM certificates";
	$run_certificates = mysqli_query($connection, $query_certificates);
	$user_data_certificates = mysqli_fetch_all($run_certificates);
	// print_r($user_data_industry_skills);

    $query_courses_company_list = "SELECT * FROM courses_company_list";
    $run_courses_company_list = mysqli_query($connection, $query_courses_company_list);
    $user_data_courses_company_list = mysqli_fetch_all($run_courses_company_list);

    $query_courses = "SELECT * FROM courses_list";
    $run_courses = mysqli_query($connection, $query_courses);
    $user_data_courses = mysqli_fetch_all($run_courses);

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

    $query_experience = "SELECT * FROM experience";
    $run_experience = mysqli_query($connection, $query_experience);
    $user_data_experience = mysqli_fetch_all($run_experience);
    //print_r($user_data_experience);

    $query_project_categories = "SELECT * FROM project_categories";
    $run_project_categories = mysqli_query($connection, $query_project_categories);
    $user_data_project_categories = mysqli_fetch_all($run_project_categories);
    //print_r($user_data_project_categories);

	$query_projects = "SELECT * FROM projects";
	$run_projects = mysqli_query($connection, $query_projects);
	$user_data_projects = mysqli_fetch_all($run_projects);
	//print_r($user_data_projects);

    $query_industry_skill_categories = "SELECT * FROM industryskillcategories";
    $run_industry_skill_categories = mysqli_query($connection, $query_industry_skill_categories);
    $user_data_industry_skill_categories = mysqli_fetch_all($run_industry_skill_categories);
    //print_r($user_data_project_categories);
?>