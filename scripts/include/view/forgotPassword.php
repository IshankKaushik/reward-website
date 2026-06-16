<!DOCTYPE html>
<html lang="en">

<head>
	<title>Valpak</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">

</head>

<body class="app app-reset-password p-0">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="logo-icon me-2" src="../assets/images/valpakLogo.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Password Reset</h2>

					<div class="auth-intro mb-4 text-center">Enter your email address below. We'll email you a verification code that you have to provide to the next page</div>
					<?php if ($msg["errorMsg"] !== "") { ?>
						<div class="alert alert-danger" role="alert"><?php echo $msg["errorMsg"] ?></div>
					<?php } ?>

					<?php if ($msg["warning"] !== "") { ?>
						<div class="alert alert-warning" role="alert"><?php echo $msg["warning"] ?></div>
					<?php } ?>

					<?php if ($msg["success"] !== "") { ?>
						<div class="alert alert-success" role="alert"><?php echo $msg["success"] ?></div>
					<?php } ?>


					<div class="auth-form-container text-left">

						<form action="forgot-password.php" method="POST" class="auth-form resetpass-form">
							<div class="email mb-3">
								<label class="sr-only" for="reg-email">Your Email</label>
								<input value="<?php echo ($msg["field"] >= 1) ? $email . '"' . ' readonly="' : "" ?>" id="reg-email" name="email" type="email" class="form-control login-email" placeholder="Your Email" required="required">
							</div>

							<?php if ($msg["field"] >= 1) { ?>
								<div class="form-group mb-3">
									<label class="sr-only" for="reg-account_type">Account Type</label>
									<?php $accType = $setting->accounTypeName($account_type); ?>
									<input value="<?php echo ($msg["field"] >= 1) ? $accType . '"' . ' readonly="' : "" ?>" id="reg-account_type" name="account_type" type="text" class="form-control login-account_type" placeholder="Enter The Otp" required="required">
								</div>
							<?php } else { ?>
								<div class="form-group mb-3">
									<select name="account_type" required class="form-select mt-3">
										<option value="" disabled selected>Select Account Type</option>
										<option value="team_leaders">Team Leader</option>
										<option value="associate_leaders">Associate Leader</option>
										<option value="associate">Associate</option>
									</select>
								</div>
							<?php }  ?>

							<?php if ($msg["field"] >= 1) { ?>
								<div class="form-group mb-3">
									<label class="sr-only" for="reg-OTP">Otp Code</label>
									<input value="<?php echo ($msg["field"] >= 2) ? $otp . '"' . ' readonly="' : "" ?>" id="reg-OTP" name="otp" type="number" class="form-control login-OTP" placeholder="Enter The Otp" required="required">
								</div>
							<?php } ?>

							<?php if ($msg["field"] >= 2) { ?>
								<div class="form-group mb-3">
									<label class="sr-only" for="reg-psw">New Password</label>
									<input id="reg-psw" name="password" type="password" class="form-control login-email" placeholder="Enter Your New Password" required="required">
								</div>
							<?php } ?>

							<div class="text-center">
								<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Reset
									Password</button>
							</div>
						</form>

						<div class="auth-option text-center pt-5"><a class="app-link" href="login.php">Log in</a> <span class="px-2">|</span> <a class="app-link" href="signup.php">Sign up</a></div>
					</div>
					<!--//auth-form-container-->


				</div>
				<!--//auth-body-->

			</div>
			<!--//flex-column-->
		</div>
		<!--//auth-main-col-->
		<div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
			<div class="auth-background-holder">
			</div>
			<div class="auth-background-mask"></div>
			<div class="auth-background-overlay p-3 p-lg-5">
				<div class="d-flex flex-column align-content-end h-100">
					<div class="h-100"></div>
					<div class="overlay-content p-3 p-lg-4 rounded">
						<h5 class="mb-3 overlay-title">Forgot Password</h5>
						<div>If you forgot your password then you can recover with your email. Put your email to continue to reset your account.</a>.
						</div>
					</div>
				</div>
			</div>
			<!--//auth-background-overlay-->
		</div>
		<!--//auth-background-col-->

	</div>
	<!--//row-->

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function() {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/62585bd07b967b11798ac8d8/1g0kidbqf';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->


</body>

</html>