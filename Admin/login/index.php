<!DOCTYPE html>
<html lang="en">
	<?php
		require_once('../app/views/header.php');
	?>
	<title>Login</title>
	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-90 p-b-30">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-40">
							Login
						</span>
	
						<div>
							<a href="#" class="btn-login-with bg1 m-b-10">
								<i class="fa fa-facebook-official"></i>
								Login with Facebook
							</a>
							<!--
							<a href="#" class="btn-login-with bg2">
								<i class="fa fa-twitter"></i>
								Login with Twitter
							</a> -->
						</div>
	
						<div class="text-center p-t-55 p-b-30">
							<span class="txt1">
								Login with email
							</span>
						</div>
	
						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
							<input class="input100" type="text" name="email" placeholder="Email">
							<span class="focus-input100"></span>
						</div>
	
						<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
							<span class="btn-show-pass">
								<i class="fa fa fa-eye"></i>
							</span>
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100"></span>
						</div>
	
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
						</div>
						
						<div class="flex-col-c p-t-224">
							<span class="txt2 p-b-10">
								Don’t have an account?
							</span>
	
							<a href="#" class="txt3 bo1 hov1">
								Sign up now
							</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>	
		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>
		<script>
			//var json ='{"name" : "Habib" , "age" : 26 }';
			//sessionStorage.setItem("user",json);
			//const obj = JSON.stringify(user);
			//console.log(user.name);
			console.log(JSON.parse(sessionStorage.getItem("user")));
			//sessionStorage.clear();
		</script>
	</body>
</html>