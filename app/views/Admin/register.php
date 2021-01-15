<script src="/Online-Store/Admin/js/user.js"></script>
<title>Register</title>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-90 p-b-30">
			<!--<form class="login100-form validate-form"> -->
				<span class="login100-form-title p-b-40">
					Register
				</span>	
				<div>
					<a href="#" class="btn-login-with bg1 m-b-10">
						<i class="fa fa-facebook-official"></i>
							Sign up with Facebook
					</a>
					<!--
						<a href="#" class="btn-login-with bg2">
                            <i class="fa fa-twitter"></i>
							Login with Twitter
						</a> -->
				</div>
	
				<div class="text-center p-t-55 p-b-30">
                    <span class="txt1">
						Sign up
					</span>
				</div>
                
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your first name">
					<input class="input100" type="text" name="first_name" placeholder="First name" id="first_name">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your last name">
					<input class="input100" type="text" name="last_name" placeholder="Last name" id="last_name">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your login">
					<input class="input100" type="text" id="login" name="login" placeholder="Login">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your birth date">
					<input class="input100" type="date" name="birth_date" placeholder="Birth date" min="1940-12-31" max="1999-12-31" id="birth_date">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email" id="email">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your telephone number">
					<input class="input100" type="telephone" name="telephone" placeholder="Telephone" id="telephone">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your address">
					<input class="input100" type="text" name="address" placeholder="Address" id="address">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your country">
                    <select class="input100" placeholder="Country" id="country">
                        <option>Select a country ...</option>
                        <option>Japan</option>
                        <option>Tunisia</option>
                    </select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
					<span class="btn-show-pass">
						<i class="fa fa fa-eye"></i>
					</span>
					<input class="input100" type="password" name="password" placeholder="Password" id="password">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-20" data-validate = "Please confirm your password">
					<span class="btn-show-pass">
						<i class="fa fa fa-eye"></i>
					</span>
					<input class="input100" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Register
                    </button>
				</div>
				<div class="flex-col-c p-t-224">
					<span class="txt2 p-b-10">
						If you have an account
					</span>
	
					<a href="?page=login" class="txt3 bo1 hov1">
						Sign in
					</a>
				</div>
			<!--</form> -->
		</div>
	</div>
</div>
<script src="/Online-Store/Admin/js/Operation.js"></script>
<script>
	$(document).ready
	(
		function()
		{
			$("button").click
			(
				function()
				{
					registration();
				}
			);
		}
	);
</script>