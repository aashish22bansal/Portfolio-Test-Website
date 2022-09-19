<?php
    require('includes/db.php');
    require('functions/functions.php');
    //print_r($user_data_experience);
    while($row = mysqli_fetch_array($run_experience)){
        $experience_StartMonth = $row['StartMonth'];
        $experience_StartYear = $row['StartYear'];
        $experience_EndMonth = $row['EndMonth'];
        $experience_EndYear = $row['EndYear'];
        $experience_Title = $row['Title'];
        $experience_EmploymentType = $row['EmploymentType'];
        $experience_CompanyName = $row['CompanyName'];
        $experience_CompanyLink = $row['CompanyLink'];
        $experience_Location = $row['Location'];
        $experience_DescriptionOfJob = $row['DescriptionOfJob'];
        $experience_NoOfCertificateImages = $row['NoOfCertificateImages'];
        $experience_CertificateImageNames = $row['CertificateImageNames'];
        $experience_CertificateImageLinks = $row['CertificateImageLinks'];
        $experience_CompanyImageName = $row['CompanyImageName'];
        print($row);
    }
?>