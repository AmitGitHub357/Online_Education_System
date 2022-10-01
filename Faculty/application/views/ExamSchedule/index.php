<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Exam Schedule</h3>
		<div class="table-data__tool">
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<td>Course</td>
							<th>Exam Name</th>
							<td>Exam Date and Time</td>
							<td>Exam Entry Date</td>
							<td>Last Update Date</td>
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
</div>