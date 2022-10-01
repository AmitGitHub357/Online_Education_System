
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<!-- Preloader -->
<header id="header">
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-xs-12 header-top-left">
								
							</div>
							<div class="col-sm-6 col-xs-12 header-top-right">
								<ul class="list-unstyled">
									<?php 
									if ($this->session->has_userdata('Student')) {
										?>
										<?php 
											$Student = $_SESSION['Student'];
										 ?>
										 
										<li>
											<a href="<?php echo base_url().'index.php/Home/ShowProfile/'.$Student['User_id'] ?>">
											<img style="width: 50px" src="<?php echo base_url().$Student['Photo'] ?>" alt="<?php echo $Student['Name'] ?>" class="img-responsive">
										</a>	
											<a href="<?php echo base_url().'index.php/Login/Logout' ?>"><i class="fa fa-lock top-icon"></i>Logout</a></li>
										<?php
									}
									else
									{
										?>
										<li><a href="<?php echo base_url().'index.php/Login' ?>"><i class="fa fa-lock top-icon"></i>Login</a></li>
										<?php
									}
									?>
									
								</ul>
							</div>
						</div>
					</div>
				</div><!-- Ends: .header-top -->

				<div class="header-body">
					<nav class="navbar edu-navbar">
						<div class="container">
							<div class="navbar-header">
								<a href="#" class="navbar-brand  data-scroll"><img src="<?php echo base_url() ?>images/logo.png" style="width: 200px" alt=""></a>

							</div>

							<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav pull-right">
									<li class="active" ><a data-scroll="" href="<?php echo base_url().'index.php/Home' ?>">Home</a>
									</li>
									<li><a data-scroll="" href="<?php echo base_url().'index.php/Course' ?>">Courses</a>
									</li>
									<?php 
									if ($this->session->has_userdata("Student")) {
									?>
									<li><a data-scroll href="<?php echo base_url().'index.php/Exam' ?>">Exam</a>
									</li>
									<?php
									}
									 ?>
									<li><a data-scroll href="<?php echo base_url().'index.php/Event' ?>">Event</a>
									</li>
									<li><a data-scroll href="<?php echo base_url().'index.php/Teacher' ?>">Teachers</a>
									</li>
									<li><a data-scroll href="<?php echo base_url().'index.php/Home/Contact' ?>">Contact</a></li>
									<li><a data-scroll href="<?php echo base_url().'index.php/Home/About' ?>">About Us</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</div>
			</header>