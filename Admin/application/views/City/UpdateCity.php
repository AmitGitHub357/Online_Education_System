 <div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" data-parsley-validate="" class="form-horizontal">
 				<div class="card-header">
 					<strong>Update City</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">City</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="City" placeholder="Enter City Name..." value="<?php echo $City['City_Name'] ?>" class="form-control" required="" data-parsley-required-message="Please Enter City Name">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">State</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<select name="State" class="form-control" required="" data-parsley-required-message="Please Select State">
 								<option>Select State</option>
					<?php 
						foreach ($States as $State) {
							if($State['State_id'] == $City['State_id'])
							{
					?>
						<option selected="" value="<?php echo $State['State_id'] ?>">
							<?php echo $State['State_Name'] ?>
						</option>
					<?php
							}
							else
							{
					?>
						<option value="<?php echo $State['State_id'] ?>">
							<?php echo $State['State_Name'] ?>
						</option>
					<?php
							}
						}
					 ?>
 							</select>
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="UpdateCity" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Update City
 					</button>
 					<a href="<?php echo base_url()."index.php/City"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
 						<i class="fa fa-ban"></i> Cancel
 					</a>
 				</div>
 			</form>
 		</div>
 	</div>
 </div>
                     </div>
                </div>
            </div>
        </div>

    </div>

    