<div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate="">
 				<div class="card-header">
 					<strong>Update Course</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Name</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Course_Name" placeholder="Enter Course Name..." class="form-control" value="<?php echo $Course['Course_Name'] ?>" required="" data-parsley-required-message="Please Enter Course Name">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Fees</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Course_Fees" placeholder="Enter Course Fees..." class="form-control" value="<?php echo $Course['Course_Fees'] ?>" required="" data-parsley-required-message="Please Enter Course Fees">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Period</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Course_Period" placeholder="Enter Course Period In Months..." class="form-control" value="<?php echo $Course['Course_Period'] ?>" required="" data-parsley-required-message="Please Enter Course Period" data-parsley-type="number">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Category</label>
 						</div>
 						<div class="col-12 col-md-9">
							<select name="Category_id" class="form-control" required="" data-parsley-required-message="Please Selct Category">
					<?php 
						foreach ($Categories as $Category) {
							if ($Category['Category_id']==$Course['Category_id']) {
					?>
						<option selected="" value="<?php echo $Category['Category_id'] ?>">
							<?php echo $Category['Category_Name'] ?>
						</option>
					<?php
							}
							else
							{
					?>
						<option value="<?php echo $Category['Category_id'] ?>">
							<?php echo $Category['Category_Name'] ?>
						</option>
					<?php
							}
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
 							<input type="file" name="Course_Image" class="form-control-file"><img src="<?php echo base_url().$Course['Course_Image'] ?>" alt="<?php echo $Course['Course_Name'] ?>" style="max-height: 30px; max-width: 200px">
 							
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course Description</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<textarea class="form-control" style="resize: none;" name="Course_Description" required="" data-parsley-required-message="Please Enter Course Description"><?php echo $Course['Course_Description'] ?></textarea>
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="UpdateCourse" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Update Course
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

    