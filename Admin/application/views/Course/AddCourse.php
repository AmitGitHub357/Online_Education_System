 <div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate="">
 				<div class="card-header">
 					<strong>Add Course</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Name</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Course_Name" placeholder="Enter Course Name..." class="form-control" required="" data-parsley-required-message="Please Enter Course Name">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Fees</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Course_Fees" placeholder="Enter Course Fees..." class="form-control" required="" data-parsley-required-message="Please Enter Course Fees">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Period</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Course_Period" placeholder="Enter Course Period In Months..." class="form-control" required="" data-parsley-required-message="Please Enter Course Period" data-parsley-type="number">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Category</label>
 						</div>
 						<div class="col-12 col-md-9">
							<select name="Category_id" class="form-control" required="" data-parsley-required-message="Please Select Course Category">
								<option value="">Select Category</option>
							<?php 
								foreach ($Categories as $Category) {
							?>
								<option value="<?php echo $Category['Category_id'] ?>">
									<?php echo $Category['Category_Name'] ?>
								</option>
							<?php
								}
							 ?>
							</select>
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Image</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="file" name="Course_Image" class="form-control-file" accept="image/*" required="" data-parsley-required-message="Please Select Image">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Description</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<textarea class="form-control" style="resize: none;" name="Course_Description" placeholder="Enter Some Brief Description About Course..." required="" data-parsley-required-message="Please Course Brief Description"></textarea>
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="AddCourse" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Add Course
 					</button>
 					<a href="<?php echo base_url()."index.php/Course"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
 						<i class="fa fa-ban"></i> Cancel
 					</a>
 				</div>
 			</form>
 		</div>
 	</div>
 </div>
                     </div>
                </div>
            </div>
        </div>

    </div>

    