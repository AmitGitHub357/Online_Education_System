<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Contact Us</h3>
		<div class="table-responsive table--no-card m-b-30">
			<table class="table table-data2">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile No</th>
						<th>Message</th>
						<th>Entry Date</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($Contacts as $Contact) {
						?>
						<tr>
							<td><?php echo $Contact['User_Name'] ?></td>
							<td><?php echo $Contact['User_Email'] ?></td>
							<td><?php echo $Contact['User_Mobile'] ?></td>
							<td><?php echo $Contact['User_Message'] ?></td>
							<td><?php echo $Contact['Contact_Entry_Date'] ?></td>
						</tr>
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

    