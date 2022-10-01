<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Deleted Cities</h3>
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
										<a href="<?php echo base_url()."index.php/City/DeleteCity/".$city['City_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
											<i class="zmdi zmdi-delete" style="color: red"></i>
										</a>
										<a href="<?php echo base_url()."index.php/City/CityStatus/".$city['City_id']."/Active" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="fas fa-upload"></i></a>
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

    