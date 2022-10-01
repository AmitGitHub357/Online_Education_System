<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Users</h3>
				<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/Users/AddUser/'.$this->uri->segment(3) ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add User</a>
			</div>
		</div>
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
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($users as $user) {
							?>
							<tr>
								<?php 
									if ($user['User_Type']=='Teacher') {
								?>
									<td><img src="<?php echo base_url().'../Faculty/'.$user['Photo'] ?>"></td>
								<?php
									}
									else
									{
								?>
									<td><img src="<?php echo base_url().'../'.$user['Photo'] ?>"></td>
								<?php
									}
								 ?>
								
								<td><?php echo $user['Name'] ?></td>
								<td><?php echo $user['Username'] ?></td>
								<td><?php echo $user['Mobile_Number'] ?></td>
								<td><?php echo $user['Gender'] ?></td>
								<td><?php echo date('d-M-Y', strtotime($user['DOB'])) ?></td>
								<td><?php echo $user['Address'].', '.$user['City_Name'] ?></td>
								<td>
									<div class="table-data-feature">
											<a href="<?php echo base_url()."index.php/Users/UserStatus/".$user['User_id']."/Deactive/".$this->uri->segment(3) ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a>
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