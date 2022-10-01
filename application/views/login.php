<body class="login">
			<?php 
			$this->load->view("header1");
			?>
<section class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="#" method="post" class="learnpro-register-form text-center" data-parsley-validate="">
					<p class="lead">Welcome Back</p>					
					<div class="form-group"> 
					  	<input autocomplete="off" class="required form-control" placeholder="Username *" name="Username" type="email" required="" data-parsley-required-message="Please Enter Your Email">
					</div>
					<div class="form-group">
					  	<input class="required form-control" placeholder="Password *" name="Password" type="password" required="" data-parsley-required-message="Please Enter Your Password">
					</div>		
					<div class="form-group register-btn">
					 	<button class="btn btn-primary btn-lg" type="submit" name="Login">Login</button>
					</div>
				</form>
			</div>												
		</div>
	</div>
</section>