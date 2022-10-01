<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Notifications</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/Notification/AddNotification/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add Notification</a>

				</div>
			</div>
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
										<button class="item" data-toggle="modal" data-placement="top" title="Send Notification" data-original-title="Send" data-target="#smallmodal" onclick="document.cookie='DemoCookie=<?php echo $Notification['Notification_id'] ?>'">
											<i class="zmdi zmdi-mail-send"></i>
										</button>
										<a href="<?php echo base_url()."index.php/Notification/UpdateNotification/".$Notification['Notification_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <i class="zmdi zmdi-edit" style="color: blue"></i>
                                        </a>
                                        <button onclick="myfunction()" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></button>
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

            <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Select Users</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" action="<?php echo base_url().'index.php/Notification/SendNotification/' ?>">
						<div class="modal-body">
							<select name="UsersList[]" multiple="" class="form-control">
								<?php 
								foreach ($Users as $User) {
								?>
								<option value="<?php echo $User['Username'] ?>"><?php echo $User['Name'] ?></option>
								<?php
								}
								 ?>
							</select>
							<h6>Click On Any One And Than Press ctrl+A to Select All Students</h6>
						</div>
						<div class="modal-footer">	
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Send</button>

						</div>
						</form>
					</div>
				</div>
			</div>        
        </div>

    </div>

    <script type="text/javascript">
    	function myfunction() {
    		
    		var a = confirm("Do You want to confirm...?..?");
    		if (a==true) {
    			window.location='<?php echo base_url()."index.php/Notification/NotificationStatus/".$Notification['Notification_id']."/Deactive" ?>'
    		}
    	}
    </script>