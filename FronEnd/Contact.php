<?php 
    require_once '../PagesController/LoginCheck.php';
    require_once '../Services/MailService.php';
    
    if(isset($_GET['submit']))
    {
        $email=new EmailSender();
        $email->send_email("gogohanna50@gmail.com", "css", "message");
        echo 'Done';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" type="image/png" href="img/icon.png"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="Login_v14/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v14/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v14/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v14/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v14/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v14/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v14/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v14/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v14/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                            <form class="login100-form validate-form flex-sb flex-w" method="Get" action="">
					<span class="login100-form-title p-b-32">
						E-Book Store
					</span>

					<span class="txt1 p-b-11" >
						Email
					</span> 

					<div class="wrap-input100 validate-input m-b-36" data-validate = "Valid email is required: ex@abc.xyz">
                                            <input type="email" id="email" class="input100" name="email" >
						<span class="focus-input100"></span>
				   </div>
				   <span class="txt1 p-b-11" >
					Subject
				</span>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Subject is required">
										<input type="text" id="textInput" class="input100" name="subject" >
					<span class="focus-input100"></span>
			   </div>
				   
				   <span class="txt1 p-b-11" >
					Message
				  </span>
			    	<div class="wrap-input100 validate-input m-b-36" data-validate = "Message is required">
										<textarea type="text" id="textarea" class="input100" name="message" style="height: 200px;" ></textarea>
					<span class="focus-input100"></span>
									</div>					
								
					<div class="container-login100-form-btn">
                                            <input class="login100-form-btn" value="Send" name="submit" type="submit">
							
					
					</div>

				</form>
				<div class="Reg-btn" >
                                    <a class="Register-form-btn" href="index.php">
						Cancel
						<i class="fa fa-long-arrow-left m-l-5"></i>
                                                
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->

	<script src="Login_v14/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v14/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v14/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v14/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v14/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v14/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v14/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v14/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v14/js/main.js"></script>

</body>
</html>