<body class="event-01">
	<?php 
	$this->load->view("header1");
	?>
	<!-- Event Area section -->
	<section class="events-list-03">
		<div class="container">
			<div class="row m-t-30">
				<div class="col-md-12">
					<!-- DATA TABLE-->
					<div class="table-responsive m-b-40">
						<form method="post">
							<table class="table table-borderless table-data3">
								<?php 
								$x=0;
								foreach ($Questions as $Question) {
									?>
									<tbody class="panel panel-default">
										<tr class="panel-heading online-test">
											<td class="panel-title"><b><?php echo ++$x." ".$Question['Question'] ?></b></td>
										</tr>
									</tbody>
									<tbody class="panel-collapse online-test-options">
										<tr>
											<td><input type="radio" name="<?php echo $Question['Question_id'] ?>_Option" value="<?php echo $Question['Option_A'] ?>"><?php echo $Question['Option_A'] ?></td>
										</tr>
										<tr>
											<td><input type="radio" name="<?php echo $Question['Question_id'] ?>_Option" value="<?php echo $Question['Option_B'] ?>"><?php echo $Question['Option_B'] ?></td>
										</tr>
										<tr>
											<td><input type="radio" name="<?php echo $Question['Question_id'] ?>_Option" value="<?php echo $Question['Option_C'] ?>"><?php echo $Question['Option_C'] ?></td>
										</tr>
										<tr>
											<td><input type="radio" name="<?php echo $Question['Question_id'] ?>_Option" value="<?php echo $Question['Option_D'] ?>"><?php echo $Question['Option_D'] ?></td>
										</tr>
									</tbody>
									<?php
								}
								?>
								<tr>
									<th>
										<button class="btn btn-primary" name="SubmitAnswers">Submit Your Answers</button>
									</th>
								</tr>
							</table>
						</form>
					</div>
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</section>
	<!-- ./ End Event Area section --> 