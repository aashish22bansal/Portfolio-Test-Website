<?php
    $servername = "localhost";
    $username = "root";
    $password = "123Aashish456";
    $databaseName = "myportfolio";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $db = mysqli_connect($servername,$username,$password,$databaseName,"8080") or die("Database Not Found!");
    // Create connection
    // $conn = new mysqli('localhost','root',$password,$databaseName);
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    // $mysqli = new mysqli($servername,$username,$password,$databaseName);

    // // Check connection
    // if ($mysqli -> connect_errno) {
    //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //     exit();
    // }
?>
