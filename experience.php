<?php
    require('includes/db.php');
    require('functions/functions.php');
    $query_experience = "SELECT * FROM experience";
    $run_experience = mysqli_query($connection, $query_experience);
    $user_data_experience = mysqli_fetch_all($run_experience);
    //print_r($user_data_experience);
    while($row = mysqli_fetch_array($run_experience)){
        print($row);
        $experience_ID = $row['ID'];
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
        print($experience_ID);
    }
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
                    <div class="col-md-9">
                        <div id="page-2" class= "page two">
                            <h2 class="heading">Experience</h2>
                            <div class="resume-wrap d-flex ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <!--<span class="flaticon-ideas"></span>-->
                                    <img src="images/RBDS.jpeg" width="65px" class="rounded-circle">
                                </div>
                                <div class="text pl-3">
                                    <span class="date">Jun/2022 - Aug/2022</span>
                                    <h2>Internship - Jr. Developer (Project Lead - ML Division)</h2>
                                    <span class="position"><a href="https://www.linkedin.com/in/john-wesley-manasseh-b35154184/" class="r-link" rel="noopener noreferrer" target="_blank">River Bend Data Solutions Pvt. Ltd.</a></span>
                                    <p> (Remote) Hyderabad, Telangana, India.</p>
                                    <p>Certificates:
                                    <table>
                                        <tr>
                                            <td>
                                                <a href="https://drive.google.com/file/d/1XJ5jhiVNXobzWFNUZAyBWVOo16WvR_i3/view?usp=sharing" target="_blank">
                                                    <img src="Certificates/Experience/RBDS/Aashish - RBDS internship certificate _page-0001.jpg" width="20%"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Internship Certificate</td>
                                        </tr>
                                    </table>
                                    </p>
                                    <p>
                                        In this Internship, we worked on the project named iClinic which is Smart Hospital Management System to help both Doctors and the Management Staff.
                                    </p>
                                </div>
                            </div>
                            <br>

                            <br>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
</html>