 <div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate="">
 				<div class="card-header">
 					<strong>Add Syllabus</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">
 								Select Course Name
 							</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<select required="" data-parsley-required-message="Please Select Course" class="form-control" name="Course">
 								<option value="">
 									Select Course
 								</option>
 								<?php 
 								foreach ($Courses as $Course) {
 									?>
 									<option value="<?php echo $Course['Course_id'] ?>">
 										<?php echo $Course['Course_Name'] ?>
 									</option>
 									<?php
 								}
 								?>
 							</select>
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Select Syllabus File</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="file" name="Syllabus_PDF" class="form-control-file" accept="application/pdf" required="" data-parsley-required-message="Please select Syllabus File">
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="AddSyllabus" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Upload Syllabus
 					</button>
 					<a href="<?php echo base_url()."index.php/Syllabus"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
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