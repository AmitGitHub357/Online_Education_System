<?php //print_r($Questions);
//die();  ?>
<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Questions</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/Questions/AddQuestion/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add Question</a>

				</div>
			</div>
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
							<th></th>
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
								<td>
									<div class="table-data-feature">
										<a href="<?php echo base_url()."index.php/Questions/UpdateQuestion/".$Question['Question_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
											<i class="zmdi zmdi-edit" style="color: blue"></i>
										</a>
										<a href="<?php echo base_url()."index.php/Questions/QuestionStatus/".$Question['Question_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a>
									</div>
								</td>
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
</div>