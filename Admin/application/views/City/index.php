<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Cities</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-right">
				<a href="<?php echo base_url().'index.php/City/AddCity/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Add City</a>
			</div>
		</div>
		<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
							<th>City</th>
							<th>State</th>
							<th>Entry Date</th>
							<th>Last Update</th>

							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if (count($Cities)==0) {
						?>
						<tr class="tr-shadow">
							<td colspan="4">
								<center><h3>No Data Found</h3></center>
							</td>
						</tr>
						<?php
						}
						else
						{
						foreach ($Cities as $city) {
							?>

							<tr class="tr-shadow">
								<td><?php echo $city['City_Name'] ?></td>
								<td><?php echo $city['State_Name'] ?></td>
								<td><?php echo $city['City_Entry_Date'] ?></td>
								<td><?php echo $city['City_Update_Date'] ?></td>

								<td>
									<div class="table-data-feature">

										<a href="<?php echo base_url()."index.php/City/UpdateCity/".$city['City_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
											<i class="zmdi zmdi-edit" style="color: blue"></i>
										</a>
										<a href="<?php echo base_url()."index.php/City/CityStatus/".$city['City_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a>
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

    