<?php 
    if (!isset($_SESSION['Admin'])) {
        header("location: base_url()");
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Change Password</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url()."assets/" ?>images/icon/logo.png" alt="Online Education" />
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" data-parsley-validate="">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input class="au-input au-input--full" type="password" name="OldPassword" placeholder="Enter Your Old Password" required="" data-parsley-required-message="Please Enter Your Old Password">
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input class="au-input au-input--full" type="password" name="NewPassword" placeholder="Enter Your New Password" required="" id="password"data-parsley-required-message="Please Enter Your New Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="ConfirmPassword" placeholder="Confirm Your New Password" required="" data-parsley-equalto="#password" data-parsley-required-message="Please Confirm Your New Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="ChangePassword">Change Password</button>

                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="button" onclick="javascript:history.go(-1)" name="ChangePassword">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="<?php echo base_url()."assets/" ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- parsley Validation -->
    <script src="<?php echo base_url()."assets/" ?>js/parsley.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>css/parsley.css">
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()."assets/" ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()."assets/" ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()."assets/" ?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()."assets/" ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()."assets/" ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()."assets/" ?>js/main.js"></script>
</body>

</html>
<!-- end document-->