<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						E-Book Store
					</span>

					<span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
                                            <input type="text" id="textInput" class="input100" name="name" >
						<span class="focus-input100"></span>
					</div>


					<span class="txt1 p-b-11">
						Category
					</span>
                    <div class="wrap-input100 m-b-36" >
					<select class="browser-default custom-select mb-4" id="select">
						<option value="" disabled="" selected="">Choose your option</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</select>
				</div>


					<span class="txt1 p-b-11" >
						ISBN
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "ISBN is required">
						<input type="text" id="textInput" class="input100" >
						<span class="focus-input100"></span>
                                        </div>
                                        <span class="txt1 p-b-11" >
						QUANTITY
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Quantity is required">
						<input type="text" id="textInput" class="input100" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Price
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Price is required">
						<input type="text" id="textInput" class="input100">
						<span class="focus-input100"></span>
					 </div>
					 
					<span class="txt1 p-b-11">
						Book condition
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate ="Condition is required">
						<input type="text" id="textInput" class="input100" >
						<span class="focus-input100"></span>
					</div>
					 <span class="txt1 p-b-11">
						Description
					</span>
					<div class="wrap-input100  m-b-36">
						<textarea type="text" id="textarea" class="input100" ></textarea>
						<span class="focus-input100"></span>
					 </div>
					 
					 
					
						<div class="custom-file" style="margin-bottom: 50px;">
							<label for="myfile" class="txt1 p-b-11">IMAGE:</label>
							<input type="file"  id="myfile" name="myfile"  >
						</div>
	
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Add
						</button>
					</div>

				</form>
				<div class="Reg-btn" >
                                    <a class="Register-form-btn" href="../Supp/Category1.php">
						Cancel
						<i class="fa fa-long-arrow-left m-l-5"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
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

</body>
</html>