  <?php //print_r($Courses); 
// die(); ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<form method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="">
				<div class="card-header">
					<strong>Add Question</strong> Form
				</div>
				<div class="card-body card-block">
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Course</label>
						</div>
						<div class="col-12 col-md-9">
							<select id="Course" name="Course" class="form-control" required="" data-parsley-required-message="Please Select Courses">
								<option>Select Course</option>
								<?php 
								foreach ($Courses as $Course) {
									?>
									<option value="<?php echo $Course['Course_id'] ?>">
										<?php echo $Course['Course_Name'] ?>
									</option>
									<?php
								}
								?>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Exam</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="Exam" id="Exam" class="form-control" required="" data-parsley-required-message="Please Select Exam">
								<option value="">Select Exam</option>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Question</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="Question" placeholder="Enter Question..." class="form-control" required="" data-parsley-required-message="Please Enter Question">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Option A</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="Option_A" name="Option_A" placeholder="Enter Option A..." class="form-control" required="" data-parsley-required-message="Please Enter First Option">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Option B</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="Option_B" name="Option_B" placeholder="Enter Option B..." class="form-control" required="" data-parsley-required-message="Please Enter Second Option">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Option C</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="Option_C" name="Option_C" placeholder="Enter Option C..." class="form-control" required="" data-parsley-required-message="Please Enter Third Option">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Option D</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="Option_D" name="Option_D" placeholder="Enter Option D..." class="form-control" required="" data-parsley-required-message="Please Enter Fourth Option">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Answer</label>
						</div>
						<div class="col-12 col-md-9">
							<select class="form-control" name="Answer" required="" data-parsley-required-message="Please Select The Right Answer">
								<option value="">Choose Right Answer</option>
								<option id="Opt_A" value="">Option A</option>
								<option id="Opt_B" value="">Option B</option>
								<option id="Opt_C" value="">Option C</option>
								<option id="Opt_D" value="">Option D</option>
							</select>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button name="AddQuestion" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Add Question
					</button>
					<a href="<?php echo base_url()."index.php/Questions"; ?>" title="Back to the City List" class="btn btn-danger btn-sm">
						<i class="fa fa-ban"></i> Back To List
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

</div>
<script src="<?php echo base_url()."assets/" ?>vendor/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		
		$('#Course').change(function(){
			Course_id = $('#Course').val();
			  // alert(Course_id);
			  if(Course_id != '')
			  {
			  	$.ajax({
			  		url:"<?php echo base_url().'index.php/ExamSchedule/GetScheduleByCourse/' ?>",
			  		method:"POST",
			  		//content-type:'text/html',
			  		data:{Course_id:Course_id},
			  		success:function(data)
			  		{
			  			// var data = JSON.stringify(data);
			  			// alert(data);
			  			$("#Exam").html(data);
			  		}
			  	});
			  }
			  else
			  {
			  	$('#Exam').html('<option value="">Select Exam</option>');
			  }
			});

		$("#Option_A").change(function(){
			var a = $("#Option_A").val();
			$("#Opt_A").attr('value',a);

		});
		$("#Option_B").change(function(){
			var b = $("#Option_B").val();
			$("#Opt_B").val(b);
		});
		$("#Option_C").change(function(){
			var c = $("#Option_C").val();
			$("#Opt_C").val(c);
		});
		$("#Option_D").change(function(){
			var d = $("#Option_D").val();
			$("#Opt_D").val(d);
		});
	});
</script>