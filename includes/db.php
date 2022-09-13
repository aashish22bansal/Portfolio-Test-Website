<?php
    /*
        THIS PAGE IS DESIGNED TO FETCH ALL THE DATA FROM THE ENTIRE DATABASE
        AT ONCE SO THAT ALL THE DATA IS PRESENT WHEN THE WEBSITE IS FIRST LOADED
        IN AN ATTEMPT TO IMPROVE THE PERFORMANCE OF THE WEBSITE.
     */

    // Assigning Database Attributes to variables
    $servername = "localhost"; //"127.0.0.1:3307";
    $username = "root"; //"id19547945_root";
    $password = "123Aashish456"; //"AHgx=Wf0SXxCU5w~";
    $databaseName = "id19547945_myportfolio"; //"id19547945_myportfolio";

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

    //echo "Successfull created the connection";
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
    // $query_experience = "SELECT * FROM experience";
    // $query_industryskills = "SELECT * FROM industryskills";

    // Executing Queries
    $run_home = mysqli_query($connection,$query_home);
    $run_section_control = mysqli_query($connection,$query_section_control);
    $run_social_media = mysqli_query($connection,$query_social_media);

    // Fetching the Data
    $user_data_home = mysqli_fetch_array($run_home);
    $user_data_section_control = mysqli_fetch_array($run_section_control);
    $user_data_social_media = mysqli_fetch_array($run_social_media);

    // Checking the obtained Data
    // print_r($user_data_home);
    // print_r($user_data_section_control);
    // print_r($user_data_social_media);


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