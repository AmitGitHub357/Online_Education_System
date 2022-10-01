<body class="event-01">

	<?php 
			$this->load->view("header1");
			?>
<!-- Event Area section -->
<section class="events-list-03">
	<div class="container">
		<div class="row event-body-content">
			<?php 
			foreach ($Events as $Event) {
			?>
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="<?php echo base_url().'Admin/'.$Event['Event_Image'] ?>" alt="" class="img-responsive" style="width: 485px; height: 285px">
						</div>
						
						<div class="col-sm-7 event-info">
							<h3><?php echo $Event['Event_Name']; ?></h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php echo $Event['Event_Date']; ?>
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									<?php echo $Event['Event_Time']; ?>
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									<?php echo $Event['Event_Location']; ?>		
								</span>
							</p>

							<p><?php echo $Event['Event_Description']; ?></p>
						</div>
					</div>
				</div>	
			</div>			
			<?php
			}
			 ?>
		</div>
	</div>
</section>
<!-- ./ End Event Area section -->