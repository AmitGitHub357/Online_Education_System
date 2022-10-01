<body class="courses">	
<?php 
$this->load->view("header1");
?>
<!--Start Courses Area Section-->
<section class="courses-1">
	<div class="container">	

		<div class="row courses-r-margin-bottom">
			<?php 
			if (count($Courses)==0) {
				?>
				<div class="col-sm-4 single-courses-box">
					<h3>No Data Found</h3>
				</div>
				<?php
			}
			else
			{
			foreach ($Courses as $Course) {
			?>
			<div class="col-sm-4 single-courses-box">
				<a href="<?php echo base_url().'index.php/Course/SingleCourse/'.$Course['Course_id'] ?>">
				    <div class="single-courses">
						<figure>
							<div class="figure-img"><img src="<?php echo base_url().'Admin/'.$Course['Course_Image'] ?>" alt="" class="img-responsive"></div>
						</figure>
						<div class="courses-content-box">
							<div class="courses-content">
								<h3><a href="#"><?php echo $Course['Course_Name'] ?></a></h3>
							</div>
							<div class="courses-content-bottom">
								<ul class="list-unstyled">
									<li>₹ <?php echo $Course['Course_Fees'] ?></li>
									<li><i class="fa fa-calendar"></i><?php echo $Course['Course_Period'] ?> Months</li>
								</ul>
							</div>
						</div>
					</div><!-- Ends: .single courses -->
				</a>
			</div><!-- Ends: . -->
			<?php
			}
		}
			 ?>
			
		</div><!--End .row-->
	</div>
</section><!-- Ends: . -->	
<!-- ./ End Courses Area section -->
