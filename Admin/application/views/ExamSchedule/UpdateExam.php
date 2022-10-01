<?php 
	$Exam_Date = explode(" ", $Exam['Exam_Date']);
 ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<form action="" method="post" class="form-horizontal" data-parsley-validate="">
				<div class="card-header">
					<strong>Update Exam Schedule</strong> Form
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
							if ($ExamType['Exam_Type_id'] == $Exam['Exam_Name']) {
					?>
						<option selected="" value="<?php echo  $ExamType['Exam_Type_id'] ?>" >
							<?php echo $ExamType['Exam_Type'] ?>
						</option>
					<?php
							}
							else
							{
					?>
						<option value="<?php $ExamType['Exam_Type_id'] ?>" >
							<?php echo $ExamType['Exam_Type'] ?>
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
							<label for="hf-email" class=" form-control-label">Course</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="Course_id" class="form-control" required="" data-parsley-required-message="Please Select Course">
								<option value="">Select Course</option>
								<?php 
								foreach ($Courses as $Course) {
									if ($Exam['Course_id']==$Course['Course_id']) {
								?>
								<option selected value="<?php echo $Course['Course_id'] ?>">
										<?php echo $Course['Course_Name'] ?>
									</option>
								<?php
									}
									else
									{
								?>
								<option value="<?php echo $Course['Course_id'] ?>">
										<?php echo $Course['Course_Name'] ?>
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
							<label for="hf-email" class=" form-control-label">Exam Date</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="Date" name="Exam_Date" value="<?php echo $Exam_Date[0] ?>" class="form-control" required="" data-parsley-required-message="Please Enter Exam Date">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Exam Time</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="Time" value="<?php echo $Exam_Date[1] ?>" name="Exam_Time" class="form-control" required="" data-parsley-required-message="Please Enter Exam Time">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button name="UpdateExam" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Update Schedule
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

    