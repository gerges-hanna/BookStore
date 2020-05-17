<?php
require '../Services/CustomerService.php';

if(isset($_POST['submit']))
{
    
    if($_POST['pass']==$_POST['conpass'])
    {
        $user=new User();
        $user->setName($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['pass']);
        $user->setPhone($_POST['phone']);
        $user->setUserType(0);
        $user->setCan_delete(0);
        $user->setCan_read(1);
        $user->setCan_update(0);
        $user->setCan_write(0);
        $register=new CustomerService();
        if($register->createCustomer($user)==1)
        {
            echo 'Done';
        }
        
    }  else {
        echo 'Sorry Password didnt match';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="Register_f/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Register_f/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Register_f/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register_f/css/util.css">
	<link rel="stylesheet" type="text/css" href="Register_f/css/main1.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('Register_f/images/bg-02.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                            <form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="UserName is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="phone" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="conpass" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                                                        <input type="submit" name="submit" value="Sign UP" class="login100-form-btn">
							
						</div>

						<a href="Login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="Register_f/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Register_f/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Register_f/vendor/bootstrap/js/popper.js"></script>
	<script src="Register_f/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Register_f/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Register_f/vendor/daterangepicker/moment.min.js"></script>
	<script src="Register_f/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Register_f/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Register_f/js/main.js"></script>

</body>
</html>