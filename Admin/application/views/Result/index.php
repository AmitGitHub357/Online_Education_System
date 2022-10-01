<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Material</h3>
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th>Student Name</th>
							<th>Course</th>
							<th>Exam</th>
							<th>Exam Date</th>
							<th>Marks</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if (count($Results)==0) {
						?>
						<tr class="tr-shadow">
							<td colspan="6">
								<center><h3>No Data Found</h3></center>
							</td>
						</tr>
						<?php
						}
						else
						{
						foreach ($Results as $Result) 
						{
							?>
							<tr class="tr-shadow">
								<td><?php echo $Result['Name'] ?></td>
								<td><?php echo $Result['Course_Name'] ?></td>
								<td><?php echo $Result['Exam_Type'] ?></td>
								<td><?php echo $Result['Exam_Date'] ?></td>
								<td><?php echo $Result['Marks'] ?></td>
							</tr>
							<tr class="spacer"></tr>
						</tr>

						<?php
					}
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
</div>