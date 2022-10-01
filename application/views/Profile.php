<body class="t-profile-01">

<?php 
	$this->load->view("header1");
?>

<!-- Teachers Area section -->
<section class="teacher-prolile-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 t-profile-left">
				<div class="teacher-contact">
					<img src="<?php echo base_url().$Student['Photo'] ?>" alt="<?php echo $Student['Name'] ?>" class="img-responsive">
					<h3>Contact Info</h3>
					<p><span><i class="fa fa-envelope"></i>Email:</span> <?php echo $Student['Username'] ?></p>
					<p><span><i class="fa fa-phone"></i>Phone:</span><?php echo $Student['Mobile_Number'] ?></p>
					<ul class="list-unstyled">
						<li>
							<a href="<?php echo base_url().'index.php/Home/UpdateProfile/'.$Student['User_id'] ?>" title="Update Profile">
								<i class="fa fa-user"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url().'index.php/Home/ChangePassword/'.$Student['User_id'] ?>" title="Change Password">
								<i class="fa fa-wrench"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9 t-profile-right">
				<div class="row all-corsess-wapper">
					<div class="col-sm-12">
						<div class="all-courses">
							<h3><?php echo $Student['Name'] ?></h3>
							<div class="profile__courses__inner">
                                <ul class="profile__courses__list list-unstyled">
                                    <li><i class="fa fa-male"></i>Gender:</li>
                                    <li><i class="fa fa-birthday-cake"></i>Date of Birth:</li>
                                    <li><i class="fa fa-building"></i>City:</li>
                                    <li><i class="fa fa-book"></i>My Courses:</li>
                                    <li><i class="fa fa-address-card"></i>Address:</li>
                                </ul>
                                <ul class="profile__courses__right list-unstyled">
                                    <li><?php echo $Student['Gender'] ?></li>
                                    <li><?php echo $Student['DOB'] ?></li>
                                    <li><?php echo $Student['City_Name'] ?></li>
                                    <li><?php echo $Courses ?></li>
                                    <li><?php echo $Student['Address'] ?></li>
                                </ul>
                            </div>
                            
						</div>
					</div>
				</div>
			</div>															
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->
