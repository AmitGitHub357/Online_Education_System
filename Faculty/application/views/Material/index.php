<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Material</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/Material/AddMaterial/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add Material</a>

				</div>
			</div>

			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th>Course</th>
							<th>Lecture</th>
							<th>Material</th>
							<th>Entry Date</th>

							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if (count($Materials)==0) {
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
						foreach ($Materials as $Material) {
							?>

							<tr class="tr-shadow">
								<td><?php echo $Material['Course_Name'] ?></td>
								<td><?php echo $Material['Lecture_No'] ?></td>
								<td>
									<?php
									$file = explode('/', $Material['Material_File']);
									 ?>
									<a href="<?php echo base_url().$Material['Material_File'] ?>" target="_blank">
										<?php echo $file[1] ?>
										</a>
								</td>
								<td><?php echo $Material['Material_Entry_Date'] ?></td>
								<td>
									<div class="table-data-feature">
										<a href="<?php echo base_url()."index.php/Material/MaterialStatus/".$Material['Material_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a>
									</div>
								</td>
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