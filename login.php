<!DOCTYPE html>
<html lang="en">
<head>
	<title>Children's Aid Society- in assiciation with Atharva Foundation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container" id="loader">
		<img src="./img/loader.gif" style="height:100vh;width:100%;">
	</div>
	<div id="choice" style="display:none;">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
					<div class="login100-form validate-form">
						<span class="login100-form-title p-b-33">
							Choice
						</span>
						<div class="container-login100-form-btn m-t-20">
							<button class="login100-form-btn mb-4" id="login_choice">
								Sign in
							</button>
						</div>
					</div>
					<a href="minimal_form.php">
						<button class="login100-form-btn mb-4">
							Tell about a child
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="login" style="display:none;">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
					<form class="login100-form validate-form" action="user_check.php" method="post">
						<span class="login100-form-title p-b-33">
							Account Login
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="user_name" placeholder="Email">
							<span class="focus-input100-1"></span>
							<span class="focus-input100-2"></span>
						</div>

						<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pwd" placeholder="Password">
							<span class="focus-input100-1"></span>
							<span class="focus-input100-2"></span>
						</div>

						<div class="container-login100-form-btn m-t-20">
							<button class="login100-form-btn">
								Sign in
							</button>
						</div>
					</form>
				</div>
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
	<script type="text/javascript">
		$(document).ready(function()
		{
			setTimeout(function()
			{
				$('#loader').fadeOut("fast",function()
				{
					$('#choice').fadeIn("fast");
				});
			},500);
			$("#login_choice").on("click",function()
			{
				$("#choice").fadeOut("fast");
				$('#loader').fadeIn("fast",function(){
					setTimeout(function()
					{$('#loader').fadeOut("fast");},500);
					setTimeout(function()
					{
						$('.login').fadeIn();
					},500);
				});
			});
		});
	</script>
</body>
</html>