<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="" method="post" class="form-horizontal" data-parsley-validate="">
                <div class="card-header">
                    <strong>Update State</strong> Form
                </div>
                <div class="card-body card-block">

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">State</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="StateName" placeholder="Enter State Name..." class="form-control" value="<?php echo $State['State_Name'] ?>" data-parsley-required-message="Please Enter State Name" required="">
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button name="UpdateState" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                    <a href="<?php echo base_url().'index.php/State' ?>" title="Back to the State List"	 class="btn btn-danger btn-sm">
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

