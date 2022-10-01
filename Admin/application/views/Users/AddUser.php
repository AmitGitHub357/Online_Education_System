<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="" method="post" class="form-horizontal" data-parsley-validate="">
                <div class="card-header">
                    <strong>Add User</strong> Form
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="Name" placeholder="Enter User's Name..." class="form-control" required="" data-parsley-required-message="Please Enter User's Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" name="UserName" placeholder="Enter User's Email..." class="form-control" required="" data-parsley-required-message="Please Enter User's Email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">DOB</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="Date" name="DOB" placeholder="Enter User's Date of Birth..." class="form-control" required="" data-parsley-required-message="Please Enter User's Birthdate">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Mobile No</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="MobileNo" placeholder="Enter User's Mobile No..." class="form-control" required="" data-parsley-required-message="Please Enter User's Mobile Number"data-parsley-pattern="/^[0-9]{10}+$/"data-parsley-pattern-message="Please Enter Valid Mobile Number">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">City</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="City" class="form-control" required="" data-parsley-required-message="Please Select City">
                                <option>Select City</option>
                                <?php 
                                foreach ($Cities as $City) {
                                ?>
                                <option value="<?php echo $City['City_id'] ?>"><?php echo $City['City_Name'] ?></option>
                                <?php
                                }
                                 ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-email" class=" form-control-label">Select Course</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="hidden" name="UserType" value="<?php echo $this->uri->segment(3) ?>">
                            <select multiple="" name="Course[]" class="form-control" required="" data-parsley-required-message="Please Select Courses">
                                <option value="">Select Courses</option>
                                <?php 
                                foreach ($Courses as $Course) {
                                ?>
                                <option value="<?php echo $Course['Course_id'] ?>"><?php echo $Course['Course_Name'] ?></option>
                                <?php
                                }
                                 ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button name="AddUser" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Add User
                    </button>
                    
                    <a href="<?php echo base_url().'index.php/Users/index/'.$this->uri->segment(3) ?>" title="Back to the Users List" class="btn btn-danger btn-sm">
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

    