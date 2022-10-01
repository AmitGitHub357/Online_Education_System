<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Notifications</h3>
		<div class="table-responsive table--no-card m-b-30">
			<table class="table table-data2">
				<thead>
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th>Date</th>
						<th>Last Updated</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($Notifications as $Notification) {
						?>
						<tr>
							<td><?php echo $Notification['Notification_Title'] ?></td>
							<td><?php echo $Notification['Notification_Description'] ?></td>
							<td><?php echo $Notification['Notification_Date'] ?></td>
							<td><?php echo $Notification['Notification_Update_Date'] ?></td>

							<td>
								<div class="table-data-feature">
									<a href="<?php echo base_url()."index.php/Notification/DeleteNotification/".$Notification['Notification_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
										<i class="zmdi zmdi-delete" style="color: red"></i>
									</a>
									<a href="<?php echo base_url()."index.php/Notification/NotificationStatus/".$Notification['Notification_id']."/Active" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="fas fa-upload"></i></a>
									
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

    