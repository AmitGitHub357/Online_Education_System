 <div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="">
 				<div class="card-header">
 					<strong>Add Material</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Course</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<select name="Course" class="form-control" required="" data-parsley-required-message="Please Select Courses">
 								<option>Select Course</option>
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
 							<label for="hf-email" class=" form-control-label">Lecture No</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Lecture_No" placeholder="Enter Lecture Number..." class="form-control" required="" data-parsley-required-message="Please Enter Lecture Number">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Material File</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="file" name="Material_File" class="form-control-file" required="" data-parsley-required-message="Please Select Material File">
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="AddMaterial" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Add Material
 					</button>
 					<a href="<?php echo base_url()."index.php/Material"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
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
</div>