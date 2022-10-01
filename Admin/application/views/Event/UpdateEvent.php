 <div class="row">
 	<div class="col-lg-12">
 		<div class="card">
 			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data" data-parsley-validate="">
 				<div class="card-header">
 					<strong>Update Event</strong> Form
 				</div>
 				<div class="card-body card-block">
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Event Name</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Event_Name" placeholder="Enter Event Name..." class="form-control" value="<?php echo $Event['Event_Name'] ?>" required="" data-parsley-required-message="Please Enter Event Name">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Event Date</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="date" name="Event_Date" placeholder="Select Event Date" class="form-control" value="<?php echo $Event['Event_Date'] ?>" required="" data-parsley-required-message="Please Enter Event Date">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Event Time</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="time" name="Event_Time" placeholder="Select Event Time..." class="form-control" value="<?php echo $Event['Event_Time'] ?>" required="" data-parsley-required-message="Please Enter Event Time">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Event Location</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<input type="text" name="Event_Location" placeholder="Where do you arrenge the Event..?" class="form-control" value="<?php echo $Event['Event_Location'] ?>" required="" data-parsley-required-message="Please Enter Event Location Address">
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Event Image</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<div>
 							<input type="file" name="Event_Image" class="form-control-file" accept="image/*"><img src="<?php echo base_url().$Event['Event_Image'] ?>" width="100">
 						</div>
 						</div>
 					</div>
 					<div class="row form-group">
 						<div class="col col-md-3">
 							<label for="hf-email" class=" form-control-label">Event Description</label>
 						</div>
 						<div class="col-12 col-md-9">
 							<textarea class="form-control" style="resize: none;" name="Event_Description" placeholder="Enter Some Brief Description About Event..." required="" data-parsley-required-message="Please Enter Event Description"><?php echo $Event['Event_Description'] ?></textarea>
 						</div>
 					</div>
 				</div>
 				<div class="card-footer">
 					<button name="UpdateEvent" class="btn btn-primary btn-sm">
 						<i class="fa fa-dot-circle-o"></i> Update Event
 					</button>
 					<a href="<?php echo base_url()."index.php/Event"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
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

    