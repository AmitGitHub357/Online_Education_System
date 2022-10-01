 <div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form data-parsley-validate="" action="" method="post" class="form-horizontal">
 				<div class="card-header">
 					<strong>Add City</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">City</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" required="" data-parsley-required-message="Please Enter City Name" validatestring name="City" placeholder="Enter City Name..." class="form-control">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">State</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<select name="State" class="form-control" required="" data-parsley-required-message="Please Select State">
 								<option value="">Select State</option>
 								<?php 
 								foreach ($States as $State) {
 									?>
 									<option value="<?php echo $State['State_id'] ?>">
 										<?php echo $State['State_Name'] ?>
 									</option>
 									<?php
 								}
 								?>
 							</select>
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="AddCity" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Add City
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

    <script src="<?php base_url().'assets/vendor/Parsley/parsley.js' ?>"></script>
    <script src="<?php base_url().'assets/vendor/Parsley/parsley.min.js' ?>"></script>