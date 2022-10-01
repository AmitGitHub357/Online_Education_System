		<body class="single-courses_v single-courses_v1">
			
			<?php 
			$this->load->view("header1");
			?>

			<div class="single-courses-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 sidebar-left">
							<div class="sidebar-content">
								<div class="row">
									<div class="col-sm-12">
										<div class="courses-price">
											<div class="price-hading">
												<h3>Course Price</h3>
											</div>
											<div class="price-text">
												<span class="dolar-sign">₹</span><span><?php echo $Courses['Course_Fees'] ?></span>
												<p>One Time Payment</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="all-corses">
											<div class="all-corses-hading">
												<h3>All Categories</h3>
											</div>
											<div class="all-corses-text">
												<ul class="list-unstyled">
													<?php 
													foreach ($Categories as $Category) {
														?>
														
														<li>
															<a href="<?php echo base_url().'index.php/Course/GetCoursesByCategory/'.$Category['Category_id'] ?>">
																<?php echo $Category['Category_Name'] ?>
															</a>
														</li>
														
														<?php
													}
													?>

												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="col-sm-8 sidebar-left">
							<div class="single-curses-contert">
								<h2><?php echo $Courses['Course_Name'] ?></h2>
								<div class="review-option">
									<div class="row">
										<div class="col-sm-2 categories border-left review-item-singel">
											<span>Category</span>
											<span><?php echo $Courses['Category_Name'] ?></span>
										</div>

										<div class="col-sm-4 students_105 border-left review-item-singel">
											<span>Students</span>
											<span><?php echo $Student ?></span>
										</div>
									</div>
								</div>
								<div class="details-img-bxo">
									<img src="<?php echo base_url().'Admin/'.$Courses['Course_Image'] ?>" alt="" class="img-responsive">
								</div>
								<div class="description-content">
									<h2>Description: </h2>
									<p><?php echo $Courses['Course_Description']; ?></p>
								</div>
								<?php if (isset($_SESSION['Student'])) { ?>
									<div class="curriculum-text-box">

										<div class="curriculum-section">
											<div class="panel-group" id="accordion">
												<div class="panel panel-default">
													<div class="panel-heading">
														<center>
															<h3>Materials</h3>
														</center>
													</div>
													<div id="collapse1" class="panel-collapse collapse in">
														<div class="panel-body">
															<?php 
															if (count($Materials)==0) {
																echo "Materials may not uploaded or You have not choosen this course";
															}
															else
															{
																foreach ($Materials as $Material) {
																	?>
																	<div class="row curriculum-single">
																		<div class="con-sm-12">
																			<div class="row">
																				<div class="col-sm-8">
																					<div class="lecture">
																						<span><i class="fa fa-file-text-o"></i><?php echo $Material['Course_Name']."_".$Material['Lecture_No']; ?></span>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="lecture-btn pull-right">
																						<a href="<?php echo base_url().'Faculty/'.$Material['Material_File'] ?>">View</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<?php
																}
															}
															?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>		
								<?php } ?>
							</div>
						</div>	
					</div>
				</div>
			</div>