<body class="become_teachers" style="overflow: visible;">

	<?php 
	$this->load->view("header1");
	?>

	<section class="become-teachers-01">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center become-title">
					<h2>Change Password</h2>
				</div>
			</div>		
			<div class="row">
				<div class="col-sm-12">
					<img src="images/teachars/become-teacher.jpg" alt="" class="img-responsive">
				</div>												
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="contact-form text-center">
						<form method="post" data-parsley-validate="">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<input type="password" class="form-control" placeholder="Old Password" name="OldPassword" required="" data-parsley-required-message="Please Enter Your Old Password">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<input type="password" class="form-control" placeholder="New Password" name="NewPassword" required="" data-parsley-required-message="Please Enter Your New Password" id="NewPassword">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<input type="password" class="form-control" placeholder="Confirm Password" name="ConfirmPassword" required="" data-parsley-required-message="Please Re-enter Your Old Password" data-parsley-equalto="#NewPassword" data-parsley-equalto-message="Password Should Be Match">
									</div>
								</div>
								<div class="col-sm-12">       
									<div class="full-width submit-btn">
										<input value="Change Password" type="submit" name="ChangePassword">
									</div>
								</div>	
							</div>
						</form>							
					</div>
				</div>
			</div>
		</div>
	</section>