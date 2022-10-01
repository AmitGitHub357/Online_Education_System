<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Course</h3>
		
		<!-- <div class="table-responsive table-responsive-data2"> -->
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th>Course Name</th>
							<th>Syllabus File</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($Syllabuses as $Syllabus) {
							?>
							<tr>
								<td><?php echo $Syllabus['Course_Name'] ?></td>
								<td>
									<?php 
									// echo ";
									 ?>
									<a href="<?php echo base_url().'../Admin/Images/'.$Syllabus['Syllabus_PDF'] ?>" target="_blank">
										<?php echo $Syllabus['Course_Name']." Syllabus" ?>
									</a>
								</td>
								<!-- <td>
									<div class="table-data-feature">

										<-- <a href="<?php echo base_url()."index.php/Syllabus/SyllabusStatus/".$Syllabus['Syllabus_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a> ->
									</div>
								</td> -->
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

