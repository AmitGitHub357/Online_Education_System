
<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Questions</h3>
		<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr class="tr-shadow">
							<th>Exam</th>
							<th>Question</th>
							<th>Option A</th>
							<th>Option B</th>
							<th>Option C</th>
							<th>Option D</th>
							<th>Answer</th>
						</tr>
					</thead>
					<tbody>

						<?php 
						foreach ($Questions as $Question) {
							?>
							<tr>
								<td><?php echo $Question['Course_Name']." ".$Question['Exam_Type'] ?></td>
								<td><?php echo $Question['Question'] ?></td>
								<td><?php echo $Question['Option_A'] ?></td>
								<td><?php echo $Question['Option_B'] ?></td>
								<td><?php echo $Question['Option_C'] ?></td>
								<td><?php echo $Question['Option_D'] ?></td>
								<td><?php echo $Question['Answer'] ?></td>
							</tr>
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