<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Deleted Courses</h3>
			<!-- <div class="table-responsive table-responsive-data2"> -->
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th>Course Name</th>
							<th>Course Fees</th>
							<th>Course Period</th>
							<th>Category</th>
							<th>Course Image</th>
							<th>Description</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($Courses as $Course) {
							?>
							<tr>
								<td><?php echo $Course['Course_Name'] ?></td>
								<td>Rs.<?php echo $Course['Course_Fees'] ?></td>
								<td><?php echo $Course['Course_Period'] ?> Months</td>
								<td><?php echo $Course['Category_Name'] ?></td>
								<td>
									<img src="<?php echo base_url().$Course['Course_Image'] ?>" alt="<?php echo $Course['Course_Name'] ?>" style="max-height: 100px; max-width: 200px">
								</td>
								<td><?php echo $Course['Course_Description'] ?></td>

								<td>
									<div class="table-data-feature">
										<a href="<?php echo base_url()."index.php/Course/DeleteCourse/".$Course['Course_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
											<i class="zmdi zmdi-delete" style="color: red"></i>
										</a>
										<a href="<?php echo base_url()."index.php/Course/CourseStatus/".$Course['Course_id']."/Active" ?>" class="item" data-toggle="tooltip" data-placement="top" title="Restore">
											<i class="fas fa-upload"></i>
										</a>
									</div>
								</td>
							</tr>
							<tr class="spacer"></tr>
							<?php
						}
						?>

					</tbody>
				</table>
			</div>
			<!-- END DATA TABLE -->
		</div>
		                    </div>
                </div>
            </div>
        </div>

    </div>

    