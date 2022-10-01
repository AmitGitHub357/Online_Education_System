<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Deleted Users</h3>
		<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact No</th>
							<th>Gender</th>
							<th>Birth Date</th>
							<th>Address</th>
							<th>User Type</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($users as $user) {
							?>
							<tr>
								<td><img src="<?php echo $user['Photo'] ?>"></td>
								<td><?php echo $user['Name'] ?></td>
								<td><?php echo $user['Username'] ?></td>
								<td><?php echo $user['Mobile_Number'] ?></td>
								<td><?php echo $user['Gender'] ?></td>
								<td><?php echo date('d-M-Y', strtotime($user['DOB'])) ?></td>
								<td><?php echo $user['Address'].', '.$user['City_Name'] ?></td>
								<td><?php echo $user['User_Type'] ?></td>
								<td>
									<div class="table-data-feature">
											<a href="<?php echo base_url()."index.php/Users/UserStatus/".$user['User_id']."/Active/".$this->uri->segment(3); ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-upload"></i></a>
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

    