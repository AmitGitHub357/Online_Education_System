<?php 
    // if (isset($_SESSION['Teacher'])) {
    //     header("location: base_url()");
    // }
// print_r($Profile);
// die();
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
    <title>Update Profile</title>

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
                        <div class="login-form">
                            <form action="" enctype="multipart/form-data" method="post" data-parsley-validate="">
                                <div class="form-group">
                                    
                                    <input class="au-input au-input--full" type="text" disabled="" name="" value="<?php echo $Profile['Name'] ?>">
                                </div>
                                <div class="form-group">
                                    
                                    <input class="au-input au-input--full" type="email" disabled="" name="" value="<?php echo $Profile['Username'] ?>">
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="Mobile_Number" placeholder="Enter Your Mobile Number" value="<?php echo $Profile['Mobile_Number'] ?>" required="" data-parsley-required-message="Please Enter Mobile Number">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="Gender" required="" data-parsley-required-message="Please Select Gender">
                                        <option value="">Select Gender</option>
                                        <?php 
                                        if ($Profile['Gender']=='Male') {
                                        ?>
                                        <option selected="" value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Transgender">Transgender</option>
                                        <?php
                                        }
                                        else if ($Profile['Gender']=='Female') {
                                        ?>
                                        <option value="Male">Male</option>
                                        <option selected="" value="Female">Female</option>
                                        <option value="Transgender">Transgender</option>
                                        <?php
                                        }
                                        else if ($Profile['Gender']=='Transgender') {
                                        ?>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option selected="" value="Transgender">Transgender</option>
                                        <?php
                                        }
                                         ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Your Phofile Photo</label>
                                    <div class="form-control">
                                        <input type="file" name="Photo">
                                    <span>
                                        <img align="right" src="<?php echo base_url().$Profile['Photo'] ?>" style="height: 35px">
                                    </span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <textarea name="Address" class="form-control" placeholder="Enter Your Address" style="resize: none" required="" data-parsley-required-message="Please Enter Your Address"><?php echo $Profile['Address']; ?></textarea>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="UpdateProfile">Update Profile</button>
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