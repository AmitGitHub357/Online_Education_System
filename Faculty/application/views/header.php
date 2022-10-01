<?php 
    if (!isset($_SESSION['Teacher'])) {
        redirect(base_url().'index.php/Login');
    }

    $Teacher = $_SESSION['Teacher'];
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $title; ?></title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()."assets/" ?><?php echo base_url()."assets/" ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()."assets/" ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()."assets/" ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/" ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()."assets/" ?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="<?php echo base_url()."assets/" ?>images/icon/logo.png" alt="Online Education" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="<?php echo base_url().'index.php/Course' ?>">
                        <i class="fas fa-book"></i>Course</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Syllabus' ?>">
                        <i class="fas fa-file"></i>Syllabus</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Material' ?>">
                        <i class="fas fa-copy"></i>Material</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/ExamSchedule' ?>">
                        <i class="fas fa-calendar-alt"></i>Exam Schedule</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Questions' ?>">
                        <i class="fas fa-question"></i>Questions</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#" style="color: red">
                        <i class="zmdi zmdi-delete"></i>Deleted Data</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url().'index.php/Questions/DeletedData' ?>">
                                <i class="fas fa-user"></i>Questions</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Material/DeletedData' ?>">
                                <i class="fas fa-building"></i>Material</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- HEADER DESKTOP-->
<!-- HEADER DESKTOP-->
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <h1 style="font-family: monotype-corsiva">
                                    <i>
                                        Online Education System
                                    </i>
                                </h1>                
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url().$Teacher['Photo'] ?>" alt="<?php echo $Teacher['Name'] ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $Teacher['Name'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url().$Teacher['Photo'] ?>" alt="<?php echo $Teacher['Name'] ?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $Teacher['Name'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $Teacher['Username'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo base_url().'index.php/Login/ChangePassword' ?>">
                                                        <i class="zmdi zmdi-settings"></i>Change Passsword</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo base_url().'index.php/Users/UpdateProfile' ?>">
                                                        <i class="fas fa-user"></i>Update Profile</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url().'index.php/Login/Logout' ?>">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">