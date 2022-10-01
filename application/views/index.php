<body>
	<?php 
	$this->load->view("header1");
	
	?>
	<section class="slider-content-bottom">
		<div class="container">
			<div class="row sider-btm-row-inner">
				<div class="col-sm-4 content_body slide_cont_box_01">
					<div class="slider-btm-box btm-item_01">
						<img src="<?php echo base_url() ?>images/index/slide-bottom-01.png" alt="" class="btm-item-icon">
						<h3>Professional Teachers</h3>
						
					</div>
				</div>

				<div class="col-sm-4 content_body slide_cont_box_02">
					<div class="slider-btm-box btm-item_02">
						<img src="<?php echo base_url() ?>images/index/slide-bottom-02.png" alt="" class="btm-item-icon">
						<h3>Learn Anywhere Online</h3>
						
					</div>
				</div>

				<div class="col-sm-4 content_body slide_cont_box_03">
					<div class="slider-btm-box btm-item_03">
						<img src="<?php echo base_url() ?>images/index/slide-bottom-03.png" alt="" class="btm-item-icon">
						<h3>Course Certificate</h3>
						
					</div>
				</div>

			</div>
		</div>
	</section>		


	<!-- Start Welcome Area section -->
	<section class="Welcome-area">
		<div class="container">	
			<div class="row">
				<div class="col-sm-6 Welcome-area-text">
					<div class="row">
						<div class="col-sm-12 section-header-box">
							<div class="section-header section-header-l">
								<h2>Welcome</h2>
							</div><!-- ends: .section-header -->
						</div>
					</div>
					<p>	
						E-Learning today has taken the world by storm and helped make learning on-the-go, a norm. Today, learners have access to multiple forms of content which aim to engage the learner. Psychologists state that the average Human attention span is approximately eight seconds, although teenagers and adults find it difficult to sustain attention on one thing for more than 20 minutes at a time. To break the barriers teenagers and adults have towards learning, today’s online courses and learning engagements strive to make the best use of technology such as smartphones and tablets to disseminate byte-sized learning nuggets. Content is also tailored to suit each niche learner segment.
					</p>
					<p>
						E-Learning is also leveraged to complement Instructor-Led Training Modules, so that a learners get the best of both worlds and are able to quickly apply their newly acquired skills, on-the-job. The benefits of e-learning are multi-fold. Some well-known and acknowledged benefits include faster delivery, lower costs, more effective learning and no-geographical constraints. E-Learning will continue to be an effective instrument for self-development for audiences, for years to come.
					</p>	
				</div><!-- Ends: . -->

				<div class="col-sm-6 welcome-img">
					<img src="<?php echo base_url() ?>images/index/welcome.png" alt="" class="img-responsive">
				</div><!-- Ends: . -->					
			</div>
		</div>
	</section><!-- Ends: . -->
	<!-- ./ End Welcome Area section -->


	<!--Start Courses Area Section-->
	<section class="Courses-area">
		<div class="container">	
			<div class="row">
				<div class="col-sm-12 section-header-box">
					<div class="section-header">
						<h2>Latest Courses</h2>
					</div><!-- ends: .section-header -->
				</div>
			</div>

			<div class="row courses-r-margin-bottom">
				<?php foreach ($Courses as $Course): ?>
					<a href="<?php echo base_url().'index.php/Course/SingleCourse/'.$Course['Course_id'] ?>">
						<div class="col-sm-4 single-courses-box">
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
											<li></li>
											<li><i class="fa fa-calendar"></i> <?php echo $Course['Course_Period'] ?> Months</li>
											<li>₹ <?php echo $Course['Course_Fees'] ?></li>
										</ul>
									</div>
								</div>
							</div><!-- Ends: .single courses -->
						</div><!-- Ends: . -->	
					</a>
				<?php endforeach ?>
				
			</div><!--End .row-->

		</div>
	</section><!-- Ends: . -->	
	<!-- ./ End Courses Area section -->

