<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="" data-parsley-validate="" method="post" class="form-horizontal">
                <div class="card-header">
                    <strong>Update Category</strong> Form
                </div>
                <div class="card-body card-block">
                    
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-email" class=" form-control-label">Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="Category_Name" placeholder="Enter Category Name..."  value="<?php echo $Category['Category_Name'] ?>" class="form-control" required="" data-parsley-required-message="Please Enter Category Name">
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer">
                    <button name="UpdateCategory" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update Category
                    </button>
					<a href="<?php echo base_url()."index.php/Category"; ?>" title="Back to the State List" class="btn btn-danger btn-sm">
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

    