<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<form action="" method="post" class="form-horizontal" data-parsley-validate="">
				<div class="card-header">
					<strong>Add Exam Schedule</strong> Form
				</div>
				<div class="card-body card-block">
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Exam Type</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="Exam_Name" class="form-control" required="" data-parsley-required-message="Please Select Type of Exam">
								<option value="">Select Exam Type</option>
								<?php 
								foreach ($ExamTypes as $ExamType) {
									?>
									<option value="<?php echo $ExamType['Exam_Type_id'] ?>"><?php echo $ExamType['Exam_Type'] ?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Course</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="Course_id" class="form-control" required="" data-parsley-required-message="Please Select Course">
								<option value="">Select Course</option>
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
							<label for="hf-email" class=" form-control-label">Exam Date</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="Date" name="Exam_Date" class="form-control" required="" data-parsley-required-message="Please Enter Exam Date">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Exam Time</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="Time" name="Exam_Time" class="form-control" required="" data-parsley-required-message="Please Enter Exam Time">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button name="AddExam" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Add Schedule
					</button>
					<a href="<?php echo base_url()."index.php/ExamSchedule"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
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

    