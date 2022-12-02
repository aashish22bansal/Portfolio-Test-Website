<?php
require('../includes/db.php');
require('../functions/functions.php');

if(!isset($_SESSION['isUserLoggedIn'])){
  echo "<script>window.location.href = 'login.php';</script>";
}
$query_admin_index_page_badges_learning = "SELECT * FROM badges_learning";
$query_admin_index_page_badges_skills = "SELECT * FROM badges_skills";
$query_admin_index_page_certificates = "SELECT * FROM certificates";
$query_admin_index_page_courses_company_list = "SELECT * FROM courses_company_list";
$query_admin_index_page_courses_list = "SELECT * FROM courses_list";
$query_admin_index_page_education = "SELECT * FROM education";
$query_admin_index_page_experience = "SELECT * FROM experience";
$query_admin_index_page_home = "SELECT * FROM home";
$query_admin_index_page_industryskillcategories = "SELECT * FROM industryskillcategories";
$query_admin_index_page_industryskills = "SELECT * FROM industryskills";
$query_admin_index_page_personal_details = "SELECT * FROM personal_details";
$query_admin_index_page_programmingskills = "SELECT * FROM programmingskills";
$query_admin_index_page_projects = "SELECT * FROM projects";
$query_admin_index_page_project_categories = "SELECT * FROM project_categories";
$query_admin_index_page_publications = "SELECT * FROM publications";
$query_admin_index_page_section_control = "SELECT * FROM section_control";
$query_admin_index_page_social_media = "SELECT * FROM social_media";
$query_admin_index_page_subjects_matriculation = "SELECT * FROM subjects_matriculation";
$query_admin_index_page_subjects_pre_university = "SELECT * FROM subjects_pre_university";
$query_admin_index_page_subjects_undergraduate = "SELECT * FROM subjects_undergraduate";

$run_query_admin_index_page_badges_learning = mysqli_query($connection, $query_admin_index_page_badges_learning);
$run_query_admin_index_page_badges_skills = mysqli_query($connection, $query_admin_index_page_badges_skills);
$run_query_admin_index_page_certificates = mysqli_query($connection, $query_admin_index_page_certificates);
$run_query_admin_index_page_courses_company_list = mysqli_query($connection, $query_admin_index_page_courses_company_list);
$run_query_admin_index_page_courses_list = mysqli_query($connection, $query_admin_index_page_courses_list);
$run_query_admin_index_page_education = mysqli_query($connection, $query_admin_index_page_education);
$run_query_admin_index_page_experience = mysqli_query($connection, $query_admin_index_page_experience);
$run_query_admin_index_page_home = mysqli_query($connection, $query_admin_index_page_home);
$run_query_admin_index_page_industryskillcategories = mysqli_query($connection, $query_admin_index_page_industryskillcategories);
$run_query_admin_index_page_industryskills = mysqli_query($connection, $query_admin_index_page_industryskills);
$run_query_admin_index_page_personal_details = mysqli_query($connection, $query_admin_index_page_personal_details);
$run_query_admin_index_page_programmingskills = mysqli_query($connection, $query_admin_index_page_programmingskills);
$run_query_admin_index_page_projects = mysqli_query($connection, $query_admin_index_page_projects);
$run_query_admin_index_page_project_categories = mysqli_query($connection, $query_admin_index_page_project_categories);
$run_query_admin_index_page_publications = mysqli_query($connection, $query_admin_index_page_publications);
$run_query_admin_index_page_section_control = mysqli_query($connection, $query_admin_index_page_section_control);
$run_query_admin_index_page_social_media = mysqli_query($connection, $query_admin_index_page_social_media);
$run_query_admin_index_page_subjects_matriculation = mysqli_query($connection, $query_admin_index_page_subjects_matriculation);
$run_query_admin_index_page_subjects_pre_university = mysqli_query($connection, $query_admin_index_page_subjects_pre_university);
$run_query_admin_index_page_subjects_undergraduate = mysqli_query($connection, $query_admin_index_page_subjects_undergraduate);

$user_data_admin_badges_learning = mysqli_fetch_all($run_query_admin_index_page_badges_learning);
$user_data_admin_badges_skills = mysqli_fetch_all($run_query_admin_index_page_badges_skills);
$user_data_admin_certificates = mysqli_fetch_all($run_query_admin_index_page_certificates);
$user_data_admin_courses_company_list = mysqli_fetch_all($run_query_admin_index_page_courses_company_list);
$user_data_admin_courses_list = mysqli_fetch_all($run_query_admin_index_page_courses_list);
$user_data_admin_education = mysqli_fetch_all($run_query_admin_index_page_education);
$user_data_admin_experience = mysqli_fetch_all($run_query_admin_index_page_experience);
$user_data_admin_home = mysqli_fetch_all($run_query_admin_index_page_home);
$user_data_admin_industryskillcategories = mysqli_fetch_all($run_query_admin_index_page_industryskillcategories);
$user_data_admin_industryskills = mysqli_fetch_all($run_query_admin_index_page_industryskills);
$user_data_admin_personal_details = mysqli_fetch_all($run_query_admin_index_page_personal_details);
$user_data_admin_programmingskills = mysqli_fetch_all($run_query_admin_index_page_programmingskills);
$user_data_admin_projects = mysqli_fetch_all($run_query_admin_index_page_projects);
$user_data_admin_project_categories = mysqli_fetch_all($run_query_admin_index_page_project_categories);
$user_data_admin_publications = mysqli_fetch_all($run_query_admin_index_page_publications);
$user_data_admin_section_control = mysqli_fetch_all($run_query_admin_index_page_section_control);
$user_data_admin_social_media = mysqli_fetch_all($run_query_admin_index_page_social_media);
$user_data_admin_subjects_matriculation = mysqli_fetch_all($run_query_admin_index_page_subjects_matriculation);
$user_data_admin_subjects_pre_university = mysqli_fetch_all($run_query_admin_index_page_subjects_pre_university);
$user_data_admin_subjects_undergraduate = mysqli_fetch_all($run_query_admin_index_page_subjects_undergraduate);

// print_r("kasfasjfkljsakldfjnlasjndflkjasnkdfns".$user_data_admin_personal_details[0][1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <! Message Start >
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <! Message End >
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <! Message Start >
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <! Message End >
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <! Message Start >
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <! Message End >
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="../includes/logout.php"><! REMOVED THESE data-controlsidebar-slide="true"  data-widget="control-sidebar" role="button">
          <!-- <i class="fas fa-th-large"></i> -->
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?Admin_Panel_Dashboard=true" class="d-block"><?php print("Aashish Bansal"); // ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="index.php?Admin_Panel_Dashboard=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?Admin_Panel_Update_Section_Control=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Section Control
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Home Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_Home_Page_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_About_Page_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Section Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_Personal_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Personal Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_Social_Media_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Social Media</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Education Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Add_Education_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_Matriculation_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Matriculation Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_Preuniversity_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Pre-University Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Update_Undergraduate_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Undergraduate Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Experiences Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Add_Experience_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Modify_Experience_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modify Experience Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Delete_Experience_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Experience Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Publications Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Add_Publication_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Publication(s)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Modify_Publication_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modify Publication(s)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Delete_Publication_Details=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Publication(s)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Projects Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Project Category</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Project_Category=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Project Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Project_Category=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Project Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Project_Category=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Project Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Project</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Project_Details=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Project(s)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Project_Details=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Project(s)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Project_Details=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Project(s)</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Industry Skills Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Industry Skill Category</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Industry_Skill_Category=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Industry Skill Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Industry_Skill_Category=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Industry Skill Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Industry_Skill_Category=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Industry Skill Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Industry Skill</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Industry_Skill_Details=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Industry Skill</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Industry_Skill_Details=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Industry Skill</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Industry_Skill_Details=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Industry Skill</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Badges Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Learning Badge Details</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Learning_Badge=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Learning Badge</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Learning_Badge=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Learning Badge</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Learning_Badge=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Learning Badge</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Skills Badge</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Skills_Badge=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Skills Badge</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Skills_Badge=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Skills Badge</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Skills_Badge=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Skills Badge</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Certificates Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Add_Certificate=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Certificate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Modify_Certificate=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modify Certificate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?Admin_Panel_Delete_Certificate=true" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Certificate</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Courses Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Course Company Details</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Course_Company=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Course Company</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Course_Company=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Course Company</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Course_Company=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Course Company</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Course Details</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Add_Course=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Course(s)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Modify_Course=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modify Course(s)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.php?Admin_Panel_Delete_Course=true" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete Course(s)</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?Admin_Panel_Update_Resume_Page=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update Resume Page
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?Admin_Panel_Update_Admin_Account_Page=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Account Settings
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?Admin_Panel_Update_SEO_Settings=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SEO Settings
                <i class="right"></i> <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
          </li>
          <!-- CODE FROM LINE 247 TO 849 IS TO BE DELETED -->
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2"> 
          <div class="col-sm-6">
            <h1 class="m-0">Manage Portfolio Website</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            THIS IS THE PAGE OPENED BY DEFAULT
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- THE CODE FROM 882 TO 942 IN THE FOLLOWING DIV REPRESENTS NEW ORDERS, BOUNCE RATE, USER REGISTRATIONS, UNIQUE VISITORS -->
        <!-- <div class="row">
          <div class="col-lg-3 col-6">
            <! small box>
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <! ./col >
          <div class="col-lg-3 col-6">
            <! small box >
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <! ./col >
          <div class="col-lg-3 col-6">
            <! small box >
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <! ./col >
          <div class="col-lg-3 col-6">
            <! small box >
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <! ./col >
        </div> -->
        <!-- /.row -->
        <!-- Main row -->
        <!-- THE CODE FROM 947 TO 1457 IN THE FOLLOWING DIV REPRESENTS  -->
        <!-- <div class="row">
          <! Left col >
          <section class="col-lg-7 connectedSortable">
            <! Custom tabs (Charts with tabs)>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><! /.card-header >
              <div class="card-body">
                <div class="tab-content p-0">
                  <! Morris chart - Sales >
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><! /.card-body >
            </div>
            <! /.card >

            <! DIRECT CHAT >
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <! /.card-header >
              <div class="card-body">
                <! Conversations are loaded here >
                <div class="direct-chat-messages">
                  <! Message. Default to the left >
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <! /.direct-chat-infos >
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <! /.direct-chat-img >
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <! /.direct-chat-text >
                  </div>
                  <! /.direct-chat-msg >

                  <! Message to the right >
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div>
                    <! /.direct-chat-infos >
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <! /.direct-chat-img >
                    <div class="direct-chat-text">
                      You better believe it!
                    </div>
                    <! /.direct-chat-text >
                  </div>
                  <! /.direct-chat-msg >

                  <! Message. Default to the left >
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                    </div>
                    <! /.direct-chat-infos >
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <! /.direct-chat-img >
                    <div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
                    <! /.direct-chat-text >
                  </div>
                  <! /.direct-chat-msg >

                  <! Message to the right >
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                    </div>
                    <! /.direct-chat-infos >
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <! /.direct-chat-img >
                    <div class="direct-chat-text">
                      I would love to.
                    </div>
                    <! /.direct-chat-text >
                  </div>
                  <! /.direct-chat-msg >

                </div>
                <!/.direct-chat-messages>

                <! Contacts are loaded here >
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <! /.contacts-list-info >
                      </a>
                    </li>
                    <! End Contact Item >
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <! /.contacts-list-info >
                      </a>
                    </li>
                    <! End Contact Item >
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <! /.contacts-list-info >
                      </a>
                    </li>
                    <! End Contact Item >
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <! /.contacts-list-info >
                      </a>
                    </li>
                    <! End Contact Item >
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <! /.contacts-list-info >
                      </a>
                    </li>
                    <! End Contact Item >
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <! /.contacts-list-info >
                      </a>
                    </li>
                    <! End Contact Item >
                  </ul>
                  <! /.contacts-list >
                </div>
                <! /.direct-chat-pane >
              </div>
              <! /.card-body >
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <! /.card-footer>
            </div>
            <!/.direct-chat >

            <! TO DO List >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <! /.card-header >
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <! drag handle >
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <! checkbox >
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <! todo text >
                    <span class="text">Design a nice theme</span>
                    <! Emphasis label >
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <! General tools such as edit or delete>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <! /.card-body >
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            <! /.card >
          </section>
          <! /.Left col >
          <! right col (We are only adding the ID to make the widgets sortable)>
          <section class="col-lg-5 connectedSortable">

            <! Map card >
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <! card tools >
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <! /.card-tools >
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <! /.card-body>
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <! ./col >
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <! ./col >
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <! ./col >
                </div>
                <! /.row >
              </div>
            </div>
            <! /.card >

            <! solid sales graph >
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <! /.card-body >
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <! ./col >
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <! ./col >
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <! ./col >
                </div>
                <! /.row >
              </div>
              <! /.card-footer >
            </div>
            <! /.card >

            <! Calendar >
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <! tools card >
                <div class="card-tools">
                  <! button with a dropdown >
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <! /. tools >
              </div>
              <! /.card-header >
              <div class="card-body pt-0">
                <!The calendar >
                <div id="calendar" style="width: 100%"></div>
              </div>
              <! /.card-body >
            </div>
            <! /.card >
          </section>
          <! right col >
        </div> -->
        <!-- /.row (main row) -->
        <div class="row">
          <?php
          if(isset($_GET['Admin_Panel_Dashboard'])){
            echo "THIS IS THE ADMIN PANEL DASHBOARD.";
          }
          else if(isset($_GET['Admin_Panel_Update_Section_Control'])){
          ?>
            <form method="POST" action="../includes/admin.php">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="section_control_home"
                <?php
                if($user_data_admin_section_control[0][1]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch1">Home Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch2" name="section_control_about"
                <?php
                if($user_data_admin_section_control[0][2]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch2">About Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch3" name="section_control_education"
                <?php
                if($user_data_admin_section_control[0][3]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch3">Education Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch4" name="section_control_experience"
                <?php
                if($user_data_admin_section_control[0][4]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch4">Experience Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch5" name="section_control_projects"
                <?php
                if($user_data_admin_section_control[0][5]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch5">Projects Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch6" name="section_control_skills_n_languages"
                <?php
                if($user_data_admin_section_control[0][6]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch6">Skills & Languages Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch7" name="section_control_badges"
                <?php
                if($user_data_admin_section_control[0][7]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch7">Badges Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch8" name="section_control_certificates"
                <?php
                if($user_data_admin_section_control[0][8]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch8">Certificates Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch9" name="section_control_courses"
                <?php
                if($user_data_admin_section_control[0][9]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch9">Courses Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch10" name="section_control_organizations"
                <?php
                if($user_data_admin_section_control[0][10]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch10">Organizations Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch11" name="section_control_competitions"
                <?php
                if($user_data_admin_section_control[0][11]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch11">Competitions Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch12" name="section_control_resume"
                <?php
                if($user_data_admin_section_control[0][12]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch12">Resume Section</label>
              </div>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch13" name="section_control_contact"
                <?php
                if($user_data_admin_section_control[0][13]){
                  echo "checked";
                }
                ?>
                >
                <label class="custom-control-label" for="customSwitch13">Contact Section</label>
              </div>
              <input type="submit" class="btn btn-sm btn-primary" name="update-section" value="Save Changes">
            </form>
          <?php
          }
          else if(isset($_GET['Admin_Panel_Update_Home_Page_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home Page Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="../includes/admin.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name" value="<?php print($user_data_admin_personal_details[0][2]);?>" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Previous Email Address</label>
                    <input type="email" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email" placeholder="Enter New Email Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email" value="<?php print($user_data_admin_personal_details[0][0]);?>" placeholder="Enter Email Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile" value="<?php print($user_data_admin_personal_details[0][3]);?>" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description about self</label>
                    <input type="textbox" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description" value="<?php print($user_data_admin_personal_details[0][14]);?>" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Day of Birth</label>
                    <input type="number" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth" value="<?php print($user_data_admin_personal_details[0][6]);?>" placeholder="Enter Your Day of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Month of Birth</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth" value="<?php print($user_data_admin_personal_details[0][5]);?>" placeholder="Enter Your Month of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year of Birth</label>
                    <input type="number" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth" value="<?php print($user_data_admin_personal_details[0][4]);?>" placeholder="Enter Your Year of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address (in Full)</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full" value="<?php print($user_data_admin_personal_details[0][13]);?>" placeholder="Enter Your Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country of Residence</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence" value="<?php print($user_data_admin_personal_details[0][7]);?>" placeholder="Enter Country of Residence">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">State of Residence</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence" value="<?php print($user_data_admin_personal_details[0][8]);?>" placeholder="Enter State of Residence">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Distrit of Residence</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence" value="<?php print($user_data_admin_personal_details[0][9]);?>" placeholder="Enter Distrit of Residence">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City" value="<?php print($user_data_admin_personal_details[0][10]);?>" placeholder="Enter City">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Street Address</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address" value="<?php print($user_data_admin_personal_details[0][11]);?>" placeholder="Enter Street Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ZIP Code</label>
                    <input type="number" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code" value="<?php print($user_data_admin_personal_details[0][12]);?>" placeholder="Enter ZIP Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Image (Public Link)</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Profile_Image" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Profile_Image" value="<?php print($user_data_admin_personal_details[0][16]);?>" placeholder="Enter Public Link of Irofile Image">
                    <img src="<?php print($user_data_admin_personal_details[0][16]);?>" alt="Image Not Found" height="190" width="150">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input id="Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons" name="Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons" class="custom-control-input" type="checkbox"
                        <?php
                        if($user_data_admin_personal_details[0][15]){
                          echo "checked";
                        }
                        ?>
                      >
                      <label class="custom-control-label" for="Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons">Show Icons</label>
                    </div>
                  </div>  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Save Changes" id="Submit_Admin_Panel_Update_Home_Page_Details" name="Submit_Admin_Panel_Update_Home_Page_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          }// Admin_Panel_Update_Home_Page_Details
          else if(isset($_GET['Admin_Panel_Update_About_Page_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Section Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_About_Page_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Update_About_Page_Details
          else if(isset($_GET['Admin_Panel_Update_Personal_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Personal Details Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="../includes/admin.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Name" value="<?php print($user_data_admin_personal_details[0][2]);?>" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Previous Email Address</label>
                    <input type="email" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Previous_Email" placeholder="Enter New Email Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Email" value="<?php print($user_data_admin_personal_details[0][0]);?>" placeholder="Enter Email Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Mobile" value="<?php print($user_data_admin_personal_details[0][3]);?>" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description about self</label>
                    <input type="textbox" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Description" value="<?php print($user_data_admin_personal_details[0][14]);?>" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Day of Birth</label>
                    <input type="number" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Day_of_Birth" value="<?php print($user_data_admin_personal_details[0][6]);?>" placeholder="Enter Your Day of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Month of Birth</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Month_of_Birth" value="<?php print($user_data_admin_personal_details[0][5]);?>" placeholder="Enter Your Month of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year of Birth</label>
                    <input type="number" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Year_of_Birth" value="<?php print($user_data_admin_personal_details[0][4]);?>" placeholder="Enter Your Year of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address (in Full)</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Address_in_Full" value="<?php print($user_data_admin_personal_details[0][13]);?>" placeholder="Enter Your Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country of Residence</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Country_of_Residence" value="<?php print($user_data_admin_personal_details[0][7]);?>" placeholder="Enter Country of Residence">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">State of Residence</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_State_of_Residence" value="<?php print($user_data_admin_personal_details[0][8]);?>" placeholder="Enter State of Residence">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Distrit of Residence</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_District_of_Residence" value="<?php print($user_data_admin_personal_details[0][9]);?>" placeholder="Enter Distrit of Residence">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_City" value="<?php print($user_data_admin_personal_details[0][10]);?>" placeholder="Enter City">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Street Address</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Street_Address" value="<?php print($user_data_admin_personal_details[0][11]);?>" placeholder="Enter Street Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ZIP Code</label>
                    <input type="number" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_ZIP_Code" value="<?php print($user_data_admin_personal_details[0][12]);?>" placeholder="Enter ZIP Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Image (Public Link)</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Profile_Image" name="Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Profile_Image" value="<?php print($user_data_admin_personal_details[0][16]);?>" placeholder="Enter Public Link of Irofile Image">
                    <img src="<?php print($user_data_admin_personal_details[0][16]);?>" alt="Image Not Found" height="190" width="150">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input id="Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons" name="Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons" class="custom-control-input" type="checkbox"
                        <?php
                        if($user_data_admin_personal_details[0][15]){
                          echo "checked";
                        }
                        ?>
                      >
                      <label class="custom-control-label" for="Toggle_Admin_Panel_Update_Home_Page_Details_Form_Personal_Details_Show_Icons">Show Icons</label>
                    </div>
                  </div>  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Save Changes" id="Submit_Admin_Panel_Update_Personal_Details" name="Submit_Admin_Panel_Update_Home_Page_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          }//Admin_Panel_Update_Personal_Details
          else if(isset($_GET['Admin_Panel_Update_Social_Media_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Social Media Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">LinkedIn</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Social_Media_Details_Form_LinkedIn" value="<?php print($user_data_admin_social_media[0][1]);?>" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Facebookl" value="<?php print($user_data_admin_social_media[0][2]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Instagram" value="<?php print($user_data_admin_social_media[0][3]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">YouTube</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_YouTube" value="<?php print($user_data_admin_social_media[0][4]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GitHub</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_GitHub" value="<?php print($user_data_admin_social_media[0][5]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">HackerRank</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_HackerRank" value="<?php print($user_data_admin_social_media[0][6]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CodeChef</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_CodeChef" value="<?php print($user_data_admin_social_media[0][7]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CodeForces</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_CodeForces" value="<?php print($user_data_admin_social_media[0][8]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">LeetCode</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_LeetCode" value="<?php print($user_data_admin_social_media[0][9]);?>" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Resume</label>
                    <input type="text" class="form-control" id="Admin_Panel_Update_Home_Page_Details_Form_Resume" value="<?php print($user_data_admin_social_media[0][0]);?>" placeholder="Enter Link">
                    <br>
                    <style>
                      .pdfobject-container { height: 500px;}
                      .pdfobject { border: 1px solid #666; }
                    </style>
                    <script src="pdfobject.js"></script>
                    <div id="DISPLAY_CURRENT_RESUME"></div>
                    <?php
                      // print("skfajsbdfkasnfkjansdfk");
                      // $file = $user_data_admin_social_media[0][0];
                      $filename = $user_data_admin_social_media[0][0];
                      // header('Content-type: application/pdf');
                      // header('Content-Disposition: inline; filename="'.$filename.'"');
                      // header('Content-Transfer-Encoding: binary');
                      // header('Accept-Ranges: bytes');
                      // echo "<script>PDFObject.embed('$filename', '#DISPLAY_CURRENT_RESUME');</script>";
                      // @readfile($file);
                      echo "<iframe src='$filename' width='100%' style='height:100%'></iframe>";
                    ?>
                    <embed src="<?php print($user_data_admin_social_media[0][0]);?>" width="500" height="375" type="application/pdf">
                    <!-- <script>PDFObject.embed("<?php print($user_data_admin_social_media[0][0]);?>", "#DISPLAY_CURRENT_RESUME");</script> -->
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_Social_Media_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Update_Social_Media_Details
          else if(isset($_GET['Admin_Panel_Add_Education_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Education Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Education_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Education_Details
          else if(isset($_GET['Admin_Panel_Update_Matriculation_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Matriculation Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_Matriculation_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Update_Matriculation_Details
          else if(isset($_GET['Admin_Panel_Update_Preuniversity_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Pre-University Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_Preuniversity_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } // Admin_Panel_Update_Preuniversity_Details
          else if(isset($_GET['Admin_Panel_Update_Undergraduate_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Undergraduate Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_Undergraduate_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } // Admin_Panel_Update_Undergraduate_Details
          else if(isset($_GET['Admin_Panel_Add_Experience_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Experience</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Experience_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Experience_Details
          else if(isset($_GET['Admin_Panel_Modify_Experience_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Experience</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Experience_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Experience_Details
          else if(isset($_GET['Admin_Panel_Delete_Experience_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Experience</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Experience_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Experience_Details
          else if(isset($_GET['Admin_Panel_Add_Publication_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Publication</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Publication_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Publication_Details
          else if(isset($_GET['Admin_Panel_Modify_Publication_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Publication</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Publication_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Publication_Details
          else if(isset($_GET['Admin_Panel_Delete_Publication_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Publication</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Publication_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Publication_Details
          else if(isset($_GET['Admin_Panel_Add_Project_Category'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Project Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Project_Category">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Project_Category
          else if(isset($_GET['Admin_Panel_Modify_Project_Category'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Project Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Project_Category">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Project_Category
          else if(isset($_GET['Admin_Panel_Delete_Project_Category'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Project Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Project_Category">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Project_Category
          else if(isset($_GET['Admin_Panel_Add_Project_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Project(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Project_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Project_Details
          else if(isset($_GET['Admin_Panel_Modify_Project_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Project(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Project_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Project_Details
          else if(isset($_GET['Admin_Panel_Delete_Project_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Project(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Project_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Project_Details
          else if(isset($_GET['Admin_Panel_Add_Industry_Skill_Category'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Industry Skill Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Industry_Skill_Category">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Industry_Skill_Category
          else if(isset($_GET['Admin_Panel_Modify_Industry_Skill_Category'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Industry Skill Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Industry_Skill_Category">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Industry_Skill_Category
          else if(isset($_GET['Admin_Panel_Delete_Industry_Skill_Category'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Industry Skill Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Industry_Skill_Category">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Industry_Skill_Category
          else if(isset($_GET['Admin_Panel_Add_Industry_Skill_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Industry Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Industry_Skill_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Industry_Skill_Details
          else if(isset($_GET['Admin_Panel_Modify_Industry_Skill_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Industry Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Industry_Skill_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Industry_Skill_Details
          else if(isset($_GET['Admin_Panel_Delete_Industry_Skill_Details'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Industry Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Industry_Skill_Details">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Industry_Skill_Details
          else if(isset($_GET['Admin_Panel_Add_Learning_Badge'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Learning Badge(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Learning_Badge">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Learning_Badge
          else if(isset($_GET['Admin_Panel_Modify_Learning_Badge'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Learning Badge Detail(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Learning_Badge">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Learning_Badge
          else if(isset($_GET['Admin_Panel_Delete_Learning_Badge'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Learning Badge</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Learning_Badge">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Learning_Badge
          else if(isset($_GET['Admin_Panel_Add_Skills_Badge'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Skill Badge(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Skills_Badge">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Skills_Badge
          else if(isset($_GET['Admin_Panel_Modify_Skills_Badge'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Skill Badge Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Skills_Badge">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Skills_Badge
          else if(isset($_GET['Admin_Panel_Delete_Skills_Badge'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Skill Badge Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Skills_Badge">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Skills_Badge
          else if(isset($_GET['Admin_Panel_Add_Certificate'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Certificate(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Certificate">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Certificate
          else if(isset($_GET['Admin_Panel_Modify_Certificate'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Certificate Detail(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Certificate">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Certificate
          else if(isset($_GET['Admin_Panel_Delete_Certificate'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Certificate</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Certificate">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Certificate
          else if(isset($_GET['Admin_Panel_Add_Course_Company'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Course Company</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Course_Company">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Course_Company
          else if(isset($_GET['Admin_Panel_Modify_Course_Company'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Modify Course Company Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Course_Company">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Course_Company
          else if(isset($_GET['Admin_Panel_Delete_Course_Company'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Course Company Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Course_Company">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Course_Company
          else if(isset($_GET['Admin_Panel_Add_Course'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Add Course Detail(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Add_Course">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Add_Course
          else if(isset($_GET['Admin_Panel_Modify_Course'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Course Detail(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Modify_Course">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Modify_Course
          else if(isset($_GET['Admin_Panel_Delete_Course'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Delete Course Detail(s)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Delete_Course">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Delete_Course
          else if(isset($_GET['Admin_Panel_Update_Resume_Page'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Resume Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_Resume_Page">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Update_Resume_Page
          else if(isset($_GET['Admin_Panel_Update_Admin_Account_Page'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Admin Account Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_Admin_Account_Page">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Update_Admin_Account_Page
          else if(isset($_GET['Admin_Panel_Update_SEO_Settings'])){
          ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update SEO Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit_Admin_Panel_Update_SEO_Settings">Submit</button>
                </div>
              </form>
            </div>
          <?php
          } //Admin_Panel_Update_SEO_Settings
          ?>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="index.php?Admin_Panel_Dashboard=true"><?php print("Aashish Bansal"); //?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 4.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
