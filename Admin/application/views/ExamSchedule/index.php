<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Exam Schedule</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/ExamSchedule/AddExam/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add Exam Schedule</a>

				</div>
			</div>
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<td>Course</td>
							<th>Exam Name</th>
							<td>Exam Date and Time</td>
							<td>Exam Entry Date</td>
							<td>Last Update Date</td>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($Exams as $Exam) {
							?>
							<tr>
								<td><?php echo $Exam['Course_Name'] ?></td>
								<td><?php echo $Exam['Exam_Type'] ?></td>
								<td><?php echo $Exam['Exam_Date'] ?></td>
								<td><?php echo $Exam['Exam_Entry_Date'] ?></td>
								<td><?php echo $Exam['Exam_Update_Date'] ?></td>
								<td>
									<div class="table-data-feature">

										<a href="<?php echo base_url()."index.php/ExamSchedule/UpdateExamSchedule/".$Exam['Exam_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
											<i style="color: blue" class="zmdi zmdi-edit"></i>
										</a>
										<a href="<?php echo base_url()."index.php/ExamSchedule/ExamStatus/".$Exam['Exam_id']."/Taken" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a>
										<?php if ($Exam['Exam_Status']=='Pending'): ?>
											<div class="item"><i class="zmdi zmdi-Check"></i></div>
											<?php else: ?>
												<div class="item"><i class="zmdi zmdi-Close"></i></div>
											<?php endif ?>
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

