<script src="/Online-Store/Admin/js/user.js"></script>
<!--
<title>Login</title>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-90 p-b-30">
				<span class="login100-form-title p-b-40">
					Login
				</span>
	
				<div>
					<a href="#" class="btn-login-with bg1 m-b-10">
						<i class="fa fa-facebook-official"></i>
							Login with Facebook
					</a>
				</div>
	
				<div class="text-center p-t-55 p-b-30">
                    <span class="txt1">
						Login with email
					</span>
				</div>
	
				<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email or Login" id="login">
					<span class="focus-input100"></span>
				</div>
	
				<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
					<span class="btn-show-pass">
						<i class="fa fa fa-eye"></i>
					</span>
					<input class="input100" type="password" id="password"  name="pass" placeholder="Password">
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
	
					<a href="?page=register" class="txt3 bo1 hov1">
						Sign up now
					</a>
				</div>
						
		</div>
	</div>
</div>	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>

-->
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
				<img src="images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <!--<form class="pt-3">-->
                <div class="form-group">
                  <input type="text" name="login" id="login" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a id="bt_login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              <!--</form>-->
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
	<script src="js/main.js"></script>

<script src="/Online-Store/Admin/js/Operation.js"></script>
<script>
	$(document).ready
	(
		function()
		{
			$("#bt_login").click
			(
				function()
				{
					authentication();
				}
			);
		}
	);
</script>