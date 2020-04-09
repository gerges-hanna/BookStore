<?php
include '../PagesController/LoginCheck.php';
include '../PagesController/AddBookCont.php';

if($_SESSION['catID']==NULL || $_SESSION['catName']==NULL )
{
    header('Location:http://localhost/BookStore/FronEnd/Supp.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADD Book</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v14/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="Login_v14/vendor/bootstrap/css/bootstrap.min.css">
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
                        <select class="browser-default custom-select mb-4" id="select" name="cat">
                            <option  selected="" value="Empty">Choose your option</option>
<!--						<option value="op1">Option 1</option>
						<option value="op2">Option 2</option>
						<option value="op3">Option 3</option>-->
                                                <?php 
                                                for($i=0;$i<count($catArr);$i++)
                                                {
                                                    echo '<option value="'.$catArr[$i]->getId().'">'.$catArr[$i]->getName().'</option>'; 
                                                }
                                                ?>
					</select>
				</div>


					<span class="txt1 p-b-11" >
						ISBN
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "ISBN is required">
                                            <input type="text" id="textInput" class="input100" name="isbn" >
						<span class="focus-input100"></span>
                                        </div>
                                          <span class="txt1 p-b-11">
						Publisher
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Price is required">
                                            <input type="text" id="textInput" class="input100" name="publisher">
						<span class="focus-input100"></span>
					 </div>
                                        <span class="txt1 p-b-11" >
						QUANTITY
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Quantity is required">
                                            <input type="text" id="textInput" class="input100" name="quantity" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Price
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Price is required">
                                            <input type="text" id="textInput" class="input100" name="price">
						<span class="focus-input100"></span>
					 </div>
					 
					<span class="txt1 p-b-11">
						Book condition
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate ="Condition is required">
                                            <input type="text" id="textInput" class="input100" name="bookCon" >
						<span class="focus-input100"></span>
					</div>
					 <span class="txt1 p-b-11">
						Description
					</span>
					<div class="wrap-input100  m-b-36">
                                            <textarea type="text" id="textarea" class="input100" name="desc" style="height: 200px" ></textarea>
						<span class="focus-input100"></span>
					 </div>
					 
					 
					
						<div class="custom-file" style="margin-bottom: 50px;">
							<label for="myfile" class="txt1 p-b-11">IMAGE:</label>
							<input type="file"  id="myfile" name="myfile"  >
						</div>
	
					<div class="container-login100-form-btn">
                                            <input class="login100-form-btn" value="Add" name="submit" type="submit">
							
					
					</div>

				</form>
				<div class="Reg-btn" >
                                    <a class="Register-form-btn" href="Supp.php">
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