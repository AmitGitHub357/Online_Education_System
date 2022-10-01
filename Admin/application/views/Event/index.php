<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Events</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/Event/AddEvent/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add Event</a>

				</div>
			</div>
			<!-- <div class="table-responsive table-responsive-data2"> -->
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th>Event Name</th>
							<th>Event Date</th>
							<th>Event Time</th>
							<th>Event Location</th>
							<th>Event Image</th>
							<th>Description</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($Events as $Event) {
							?>
							<tr>
								<td><?php echo $Event['Event_Name'] ?></td>
								<td><?php echo $Event['Event_Date'] ?></td>
								<td><?php echo $Event['Event_Time'] ?></td>
								<td><?php echo $Event['Event_Location'] ?></td>
								<td>
									<img src="<?php echo base_url().$Event['Event_Image'] ?>" alt="<?php echo $Event['Event_Name'] ?>" style="max-height: 100px; max-width: 200px">
								</td>
								<td><?php echo $Event['Event_Description'] ?></td>

								<td>
									<div class="table-data-feature">

										<a href="<?php echo base_url()."index.php/Event/UpdateEvent/".$Event['Event_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
											<i class="zmdi zmdi-edit" style="color: blue"></i>
										</a>
										<?php if ($Event['Event_Status']=='Pending') { ?>
											<a href="<?php echo base_url()."index.php/Event/EventStatus/".$Event['Event_id']."/Done" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-alert-circle" style="color: green"></i></a>
										<?php } else if ($Event['Event_Status']=='Done') { ?>
											<a href="<?php echo base_url()."index.php/Event/EventStatus/".$Event['Event_id']."/Pending" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-check" style="color: #654321"></i></a>
										<?php } ?>
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

    