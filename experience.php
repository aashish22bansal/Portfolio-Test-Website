<?php
    require('includes/db.php');
    require('functions/functions.php');
    $query_experience = "SELECT * FROM experience";
    $run_experience = mysqli_query($connection, $query_experience);
    $user_data_experience = mysqli_fetch_all($run_experience);
    //print_r($user_data_experience);
    // while($row = mysqli_fetch_array($run_experience)){
    //     print($row);
    //     $experience_ID = $row['ID'];
    //     $experience_StartMonth = $row['StartMonth'];
    //     $experience_StartYear = $row['StartYear'];
    //     $experience_EndMonth = $row['EndMonth'];
    //     $experience_EndYear = $row['EndYear'];
    //     $experience_Title = $row['Title'];
    //     $experience_EmploymentType = $row['EmploymentType'];
    //     $experience_CompanyName = $row['CompanyName'];
    //     $experience_CompanyLink = $row['CompanyLink'];
    //     $experience_Location = $row['Location'];
    //     $experience_DescriptionOfJob = $row['DescriptionOfJob'];
    //     $experience_NoOfCertificateImages = $row['NoOfCertificateImages'];
    //     $experience_CertificateImageNames = $row['CertificateImageNames'];
    //     $experience_CertificateImageLinks = $row['CertificateImageLinks'];
    //     $experience_CompanyImageName = $row['CompanyImageName'];
    //     print($experience_ID);
    // }
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
                            <?php
                            //print_r($user_data_experience);
                            foreach($user_data_experience as $row){
                                //print_r($row);
                                $experience_ID = $row[0];
                                $experience_StartMonth = $row[1];
                                $experience_StartYear = $row[2];
                                $experience_EndMonth = $row[3];
                                $experience_EndYear = $row[4];
                                $experience_Title = $row[5];
                                $experience_EmploymentType = $row[6];
                                $experience_CompanyName = $row[7];
                                $experience_CompanyLink = $row[8];
                                $experience_Location = $row[9];
                                $experience_DescriptionOfJob = $row[10];
                                $experience_NoOfCertificateImages = $row[11];
                                $experience_CertificateImageNames = $row[12];
                                $experience_CertificateImageLinks = $row[13];
                                $experience_CompanyImageName = $row[14];
                                $experience_CertificateImageFileNames = $row[15];
                                //print($experience_CertificateImageFileNames);
                                
                                // print(gettype($experience_Individual_CertificateImageName));
                                /*
                                foreach($experience_Individual_CertificateImageName as $Name){
                                    print("<br><br><br><br>");
                                    print($Name);
                                    print("<br><br>");
                                }*/
                            ?>
                                <div class="resume-wrap d-flex ftco-animated">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <!--<span class="flaticon-ideas"></span>-->
                                        <img src="images/<?php print($experience_CompanyImageName);?>" width="65px" class="rounded-circle">
                                    </div>
                                    <div class="text pl-3">
                                        <span class="date"><?php print($experience_StartMonth);?>/<?php print($experience_StartYear);?> - <?php print($experience_EndMonth);?>/<?php print($experience_EndYear);?></span>
                                        <h2><?php print($experience_EmploymentType); ?> - <?php print($experience_Title); ?></h2>
                                        <span class="position">
                                            <a href="<?php print($experience_CompanyLink);?>" class="r-link" rel="noopener noreferrer" target="_blank">
                                                <?php print($experience_CompanyName);?>
                                            </a>
                                        </span>
                                        <p><b>Location:</b> <?php print($experience_Location);?>.</p>
                                        <p><b>Certificates:</b>
                                            <table>
                                                <?php
                                                $experience_Individual_CertificateImageName = explode(",", $experience_CertificateImageNames);
                                                $experience_Individual_CertificateImageLink = explode(",", $experience_CertificateImageLinks);
                                                $experience_Individual_CertificateImageFileName = explode(",", $experience_CertificateImageFileNames);
                                                ?>
                                                    <tr>
                                                        <?php
                                                        for($i=0; $i<$experience_NoOfCertificateImages; $i++){
                                                        ?>
                                                            <td>
                                                                <a href="<?php print((string)$experience_Individual_CertificateImageLink[$i]);?>" target="_blank">
                                                                    <img src="Certificates/Experience/<?php print((string)$experience_Individual_CertificateImageFileName[$i]);?>" width="80%"/>
                                                                </a>
                                                            </td>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                                <?php
                                                // }
                                                // for($i=0; $i<$experience_NoOfCertificateImages; $i++){
                                                ?>
                                                    <tr>
                                                        <?php
                                                        for($i=0; $i<$experience_NoOfCertificateImages; $i++){
                                                        ?>
                                                            <td>
                                                                <?php
                                                                print((string)$experience_Individual_CertificateImageName[$i]);
                                                                ?>
                                                            </td>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                                <?php
                                                //} // end of for loop
                                                //Verzeo DS/Course Completion Certificate/Verzeo DS - Course Completion Certificate - 848621739.jpg,Verzeo DS/Internship Completion Certificate/Verzeo DS - Internship Completion Certificate - 873087021.jpg,Verzeo DS/Outstanding Certificate/Verzeo DS - Outstanding Certificate - 1457460912.jpg
                                                ?>
                                            </table>
                                        </p>
                                        <p>
                                            <?php
                                                print((string)$experience_DescriptionOfJob);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <br>

                                <br>
                            <?php
                            }
                            ?>
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