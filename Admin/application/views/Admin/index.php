<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Admin</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/Admin/AddAdmin/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add Admin</a>

				</div>
			</div>
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr class="tr-shadow">
							<th>Name</th>
							<th>Email</th>
							<th>Entry Date</th>
							<th>Last Updated</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($Admins as $Admin) {
							?>
							<tr>
								<td><?php echo $Admin['Admin_Name'] ?></td>
								<td><?php echo $Admin['Admin_Email'] ?></td>
								<td><?php echo $Admin['Admin_Entry_Date'] ?></td>
								<td><?php echo $Admin['Admin_Update_Date'] ?></td>

								<td>
									<div class="table-data-feature">
										<?php 


										if ($Admin['Admin_Status'] == 'Active') {
											?>
											<a href="<?php echo base_url()."index.php/Admin/AdminStatus/".$Admin['Admin_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top" style="background-color: green"></a>
											<?php
										}
										else if ($Admin['Admin_Status'] == 'Deactive') {
											?>
											<a href="<?php echo base_url()."index.php/Admin/AdminStatus/".$Admin['Admin_id']."/Active" ?>" class="item" data-toggle="tooltip" data-placement="top" style="background-color: red"></a>
											<?php
										}

										?>
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

    