<?php
print_r($_POST);
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

    $query_admin_page_update_section__section_control = "UPDATE $databaseName.section_control SET ";
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

if(isset($_POST['Submit_Admin_Panel_Update_Home_Page_Details'])){
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code'];
    $Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Profile_Image = $_POST['Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Profile_Image'];
    $Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons = $_POST['Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons'];
    // print($Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name);
    $query_Submit_Admin_Panel_Update_Home_Page_Details = "UPDATE $databaseName.personal_details SET ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "email='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "Name='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "contact_mobile='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "BirthYear=$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth, ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "BirthMonth='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "BirthDate=$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth, ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "address_country='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "address_state='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "address_district='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "address_city='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "address_street='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "address_pincode=$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code, ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "FullAddress='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "Description='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description', ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "show_icons='$Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons' ";
    $query_Submit_Admin_Panel_Update_Home_Page_Details.= "WHERE email='$Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email';";
    // print("<br>");
    // print($query_Submit_Admin_Panel_Update_Home_Page_Details);
    $run_query_Submit_Admin_Panel_Update_Home_Page_Details = mysqli_query($connection, $query_Submit_Admin_Panel_Update_Home_Page_Details);

    print($run_query_Submit_Admin_Panel_Update_Home_Page_Details);
    if($run_query_Submit_Admin_Panel_Update_Home_Page_Details){
        echo "<script>window.location.href = '../admin/index.php';</script>";
    }
}

if(isset($_POST['Submit_Admin_Panel_Update_About_Page_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Personal_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Social_Media_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Education_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Matriculation_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Preuniversity_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Undergraduate_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Experience_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Experience_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Experience_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Publication_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Publication_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Publication_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Project_Category'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Project_Category'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Project_Category'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Project_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Project_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Project_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Industry_Skill_Category'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Industry_Skill_Category'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Industry_Skill_Category'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Industry_Skill_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Industry_Skill_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Industry_Skill_Details'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Learning_Badge'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Learning_Badge'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Learning_Badge'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Skills_Badge'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Skills_Badge'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Skills_Badge'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Certificate'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Certificate'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Certificate'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Course_Company'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Course_Company'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Course_Company'])){}

if(isset($_POST['Submit_Admin_Panel_Add_Course'])){}

if(isset($_POST['Submit_Admin_Panel_Modify_Course'])){}

if(isset($_POST['Submit_Admin_Panel_Delete_Course'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Resume_Page'])){}

if(isset($_POST['Submit_Admin_Panel_Update_Admin_Account_Page'])){}

if(isset($_POST['Submit_Admin_Panel_Update_SEO_Settings'])){}

?>