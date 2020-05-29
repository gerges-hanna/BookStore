<?php
    require_once '../PagesController/LoginCheck.php';
    require_once '../Services/AddressService.php';
    require_once '../Services/FundamentalFactory.php';
    
    $address=new Address();
    $cart=new Cart();
    $orSer=new OrderService();
    $adSer=new AddressService();
    $temp=new FundamentalFactory();
    
    
    if(isset($_POST['submit']))
    {  
        $address->setCountry($_POST['country']);
        $address->setCity($_POST['city']);
        $address->setAddress($_POST['address']);
        $address->setPostal($_POST['postal']);
        $address->setPhone($_POST['phone']);
        
        $arr=$temp->getType("cart")->getAllItemsByID($_SESSION['usId']);
        
        $order=new Order();
        $order->setPayment_method($_POST['type']);
        $order->setSipping_method(1);
        $order->setAddressID($adSer->CreateAddress($address));
        $order->setCustomerID($_SESSION['usId']);
        
        for($i=0;$i<count($arr);$i++)
        {
            $order->setBook_id($arr[$i]->getBook_id());
            $order->setQuantity($arr[$i]->getQuantity());
            $bArr=$temp->getType("book")->getAllItemsByID($arr[$i]->getBook_id());
            $qua=$bArr[0]->getPrice()*$arr[$i]->getQuantity();
            $order->setTotal($qua);
            if($orSer->createOrder($order)==1)
            {
                echo 'Done';
                $temp->getType("cart")->delete($_SESSION['usId']);
            }
            
        }
        
        
        
        
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v14/images/icons/favicon.ico"/>
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
                            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="">
					<span class="login100-form-title p-b-32">
						E-Book Store
					</span>

					<span class="txt1 p-b-11" >
						Country
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Country is required">
                                            <input type="text" id="textInput" class="input100" name="country" >
						<span class="focus-input100"></span>
                                        </div>
                                          <span class="txt1 p-b-11">
						City
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "City is required">
                                            <input type="text" id="textInput" class="input100" name="city">
						<span class="focus-input100"></span>
					 </div>
					 <span class="txt1 p-b-11">
						Address
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Address is required">
                                            <input type="text" id="textInput" class="input100" name="address" >
						<span class="focus-input100"></span>
					</div>
                                        <span class="txt1 p-b-11" >
						Postal code
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Posatal Code is required">
                                            <input type="number" id="number" class="input100" name="postal" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Phone Number
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Phone is required">
                                            <input type="number" id="number" class="input100" name="phone">
						<span class="focus-input100"></span>
					 </div>
					 
					<span class="txt1 p-b-11">
						Payment Method
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate ="Method is required">
						
                                            <label class="checkbox-inline" style="background-color: red;color: white;width: 70px; margin-right: 20px;"><input type="checkbox" id="myCheck" name="type" value="Visa"  onclick="myFunction1()">Visa
						</label>
			    <input id="text1" type="number" class="input100" name="numCard" placeholder="Card Number" style="display:none;background-color: rgb(212, 212, 212);margin-top: 5px;">
				<input id="text2" type="number" class="input100" name="cc" placeholder="CC/CVV" style="display:none;background-color: rgb(212, 212, 212);margin-top: 5px;">
                                <input id="text3" type="text" class="input100" name="exp" placeholder="ExpDate MM/YYYY" style="display:none;background-color: rgb(212, 212, 212);margin-top: 5px;">
                                <input id="text4" type="text" class="input100" name="nameCard" placeholder="Name on Card" style="display:none;background-color: rgb(212, 212, 212);margin-top: 5px;">
			
				<label class="checkbox-inline" style="background-color: red;color: white;width: 70px;">
					<input type="checkbox" id="checkBox" onclick="myFunction2()" name="type" value="cash" >Cash
				  </label>
						<span class="focus-input100"></span>
					</div>
	
					<div class="container-login100-form-btn">
                                            <input class="login100-form-btn" value="Order" name="submit" type="submit">
							
					
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
<script>
	function myFunction1() {
	  var checkBox = document.getElementById("myCheck");
	  var text = document.getElementById("text1");
	  var text = document.getElementById("text2");
	  var text = document.getElementById("text3");
	  var text = document.getElementById("text4");
	  if (checkBox.checked == true){
		text1.style.display = "block";
		text2.style.display = "block";
		text3.style.display = "block";
		text4.style.display = "block";
		document.getElementById("text1").value="none";
		 document.getElementById("text2").value="none";
		 document.getElementById("text3").value="";
		 document.getElementById("text4").value="";
		document.getElementById("checkBox").checked=false;

	  } else {
		 text1.style.display = "none";
		 text2.style.display = "none";
		 text3.style.display = "none";
		 text4.style.display = "none";
	  }
	  
	}
	function myFunction2() {
	  var checkBox = document.getElementById("checkBox");
	  var text = document.getElementById("text1");
	  var text = document.getElementById("text2");
	  var text = document.getElementById("text3");
	  var text = document.getElementById("text4");
	  if (checkBox.checked == true){
		
		document.getElementById("myCheck").checked=false;
		text1.style.display = "none";
		 text2.style.display = "none";
		 text3.style.display = "none";
		 text4.style.display = "none";
		 document.getElementById("text1").value="1";
		 document.getElementById("text2").value="1";
		 document.getElementById("text3").value="1";
		 document.getElementById("text4").value="1";
	  } 
	  
	}
	</script>
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