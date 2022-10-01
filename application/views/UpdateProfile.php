<body class="become_teachers" style="overflow: visible;">

	<?php 
	include 'header1.php';
	?>

	<section class="become-teachers-01">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center become-title">
					<h2>Update Your Profile</h2>
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
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<img src="<?php echo base_url().$Student['Photo'] ?>" style="width: 100px">
										<input class="form-control" type="file" name="Photo">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<input type="text" class="form-control" placeholder="Your Name" name="Name" value="<?php echo $Student['Name'] ?>" disabled>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<input type="email" class="form-control" placeholder="Your E-mail" name="Username" value="<?php echo $Student['Username'] ?>" disabled>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<input type="text" class="form-control" placeholder="Your Phone Number" name="Mobile" value="<?php echo $Student['Mobile_Number'] ?>">
									</div>
								</div>		
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<select class="form-control" name="Gender">
											<option value="">Select Gender</option>
											<?php 
											if ($Student['Gender']=='Male') {
												?>
												<option selected="" value="Male">Male</option>
												<option value="Female">Female</option>
												<option value="Transgender">Transgender</option>
												<?php
											}
											else if ($Student['Gender']=='Female') {
												?>
												<option value="Male">Male</option>
												<option selected="" value="Female">Female</option>
												<option value="Transgender">Transgender</option>
												<?php
											}
											else if ($Student['Gender']=='Transgender') {
												?>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												<option selected="" value="Transgender">Transgender</option>
												<?php
											}
											?>
										</select>
									</div>
								</div>		
								<div class="col-sm-12">
									<div class="form-group" align="center">
										<textarea class="form-control" placeholder="Your Address" style="resize: none;" name="Address"><?php echo $Student['Address'] ?></textarea>
									</div>
								</div>		
								<div class="col-sm-12">       
									<div class="full-width submit-btn">
										<input value="Update Profile" type="submit" name="UpdateProfile">
									</div>
								</div>	
							</div>
						</form>							
					</div>
				</div>
			</div>
		</div>
	</section>