<body class="teachers-01" style="overflow: visible;">

	<?php 
	$this->load->view("header1");
	?>


<!-- Teachers Area section -->
<section class="teachers-area">
	<div class="container">
		<div class="row teachers-wapper-01">
			<?php foreach ($Teachers as $Teacher): ?>
				<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="<?php echo base_url().'Faculty/'.$Teacher['Photo'] ?>" style="width: 345px; height: 385px;" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3><?php echo $Teacher['Name'] ?></h3>
						<?php echo $Teacher['Mobile_Number'] ?><br>
						<span>PROFESSOR OF <?php echo $Teacher['Course_Name'] ?></span>
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-google-plus teacher-icon">
									
								</i>
								<?php echo $Teacher['Username'] ?>
							
							</li>
						</ul>
					</div>
				</div>
			</div>												
			<?php endforeach ?>
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->
