<?php
// print_r($_POST);
// CONNECTING TO DATABASE
require('../includes/db.php');

if(isset($_POST['update-section'])){
    $admin_page_update_section_section_control_home = $_POST['section_control_home'] ?? 0;
    $admin_page_update_section_section_control_about = $_POST['section_control_about'] ?? 0;
    $admin_page_update_section_section_control_education = $_POST['section_control_education'] ?? 0;
    $admin_page_update_section_section_control_experience = $_POST['section_control_experience'] ?? 0;
    $admin_page_update_section_section_control_projects = $_POST['section_control_projects'] ?? 0;
    $admin_page_update_section_section_control_skills_n_languages = $_POST['section_control_skills_n_languages'] ?? 0;
    $admin_page_update_section_section_control_badges = $_POST['section_control_badges'] ?? 0;
    $admin_page_update_section_section_control_certificates = $_POST['section_control_certificates'] ?? 0;
    $admin_page_update_section_section_control_courses = $_POST['section_control_courses'] ?? 0;
    $admin_page_update_section_section_control_organizations = $_POST['section_control_organizations'] ?? 0;
    $admin_page_update_section_section_control_competitions = $_POST['section_control_competitions'] ?? 0;
    $admin_page_update_section_section_control_resume = $_POST['section_control_resume'] ?? 0;
    $admin_page_update_section_section_control_contact = $_POST['section_control_contact'] ?? 0;

    $query_admin_page_update_section__section_control = "UPDATE section_control SET ";
    $query_admin_page_update_section__section_control.= "Home='$admin_page_update_section_section_control_home', ";
    $query_admin_page_update_section__section_control.= "About='$admin_page_update_section_section_control_about', ";
    $query_admin_page_update_section__section_control.= "Education='$admin_page_update_section_section_control_education', ";
    $query_admin_page_update_section__section_control.= "Experience='$admin_page_update_section_section_control_experience', ";
    $query_admin_page_update_section__section_control.= "Projects='$admin_page_update_section_section_control_projects', ";
    $query_admin_page_update_section__section_control.= "Skills_n_Languages='$admin_page_update_section_section_control_skills_n_languages', ";
    $query_admin_page_update_section__section_control.= "Badges='$admin_page_update_section_section_control_badges', ";
    $query_admin_page_update_section__section_control.= "Certificates='$admin_page_update_section_section_control_certificates', ";
    $query_admin_page_update_section__section_control.= "Courses='$admin_page_update_section_section_control_courses', ";
    $query_admin_page_update_section__section_control.= "Organizations='$admin_page_update_section_section_control_organizations', ";
    $query_admin_page_update_section__section_control.= "Competitions='$admin_page_update_section_section_control_competitions', ";
    $query_admin_page_update_section__section_control.= "Resume_Link='$admin_page_update_section_section_control_resume', ";
    $query_admin_page_update_section__section_control.= "Contact='$admin_page_update_section_section_control_contact' WHERE ID=1";

    $run_query_admin_page_update_section__section_control = mysqli_query($connection, $query_admin_page_update_section__section_control);

    if($run_query_admin_page_update_section__section_control){
        echo "<script>window.location.href = '../admin/index.php';</script>";
    }
}





?>