<div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" class="form-horizontal" data-parsley-validate="">
 				<div class="card-header">
 					<strong>Add Notification</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Title</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Notification_Title" placeholder="Enter Notification Title..." class="form-control" required="" data-parsley-required-message="Please Enter Notification Title">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Notification</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<textarea class="form-control" name="Notification_Description" style="resize: none;" placeholder="Enter The Notification Content..." required="" data-parsley-required-message="Please Enter Notification Content"></textarea>
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="AddNotification" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Add Notification
 					</button>
 					<a href="<?php echo base_url()."index.php/Notification"; ?>" title="Back to the Notification List" class="btn btn-danger btn-sm">
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

    