<?php 
    require_once '../PagesController/LoginCheck.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Abanoub Rafaat " >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/main2.css">
          <link rel="stylesheet" href="css/purchase.css">
    <title>Home</title>
</head>
<body>
      
	<!--start navbar -->
            <?php
            require_once '../PagesController/DesignController.php';
            
            ?>
	<!--end navbar -->
	<div class="containercart">
		<div class="heading">
		  <h1>
			<span class="shopper"></span>Purchase History
		  </h1>
		  
		  <a href="#" class="visibility-cart transition is-open">X</a>    
		</div>
		
		<div class="cart transition is-open">
		  
		  <button class="btn btn-update">Clear History</button>
		  
		  
		  <div class="table">
			
			<div class="layout-inline row th">
			  <div class="col col-pro">Products</div>
			  <div class="col col-price align-center "> 
				Shipping Details
			  </div>
			  <div class="col col-qty align-center">QTY</div>
			  <div class="col">Payment Details</div>
			  <div class="col">Order Price</div>
			</div>
			
			<div class="layout-inline row row-bg2">
			  
			    <div class="col col-shipping col-numeric align-left">
					
					<h6 style="color: blue;margin-left: 10px;">Secrets</h6> 
					<h6 style="color: blue;margin-left: 10px;">King kong<h6> 
					<h6 style="color: blue;margin-left: 10px;">Hercules</h6> 
					<h6 style="color: blue;margin-left: 10px;">Blue ball</h6> 
                                        <h6 style="color: blue;margin-left: 10px;">Spider man</h6> 
                                        <h6 style="color: blue;margin-left: 10px;">Avatar</h6>
			 </div>
			  <div class="col col-shipping col-numeric align-center">
				  <div class="col-md">
		              	        <h6>Country: <p style="display: inline;font-size: 15px;">Egypt</p></h6> 
			                <h6>City: <p style="display: inline;font-size: 15px;">Cairo</p></h6> 
			                <h6>Address: <p style="display: inline;font-size: 15px;">13 st. el haram</p></h6> 
			                <h6>Phone: <p style="display: inline;font-size: 15px;">012312418</p></h6> 
                                         <h6>Postal Code: <p style="display: inline;font-size: 15px;">21334</p></h6>
				  </div>
			  </div>
	  
			  <div class="col col-qty layout-inline">
				  <input type="numeric" disabled="" value="3" />
			  </div>
			  
			  <div class="col col-vat col-numeric">
				<h6>Method:<br><p style="display: inline;font-size: 15px;">Visa</p></h6> 
				<h6>Visa Info<p style="display: inline;font-size: 15px;"><br>*********<br>CVV: 123241<br>Name: bebo<br>********</p></h6> 
			  </div>
			  <div class="col col-total col-numeric">    
				 <p> £182.95</p>
				 <button style="background-color: black;color: red; font-size: 20px;" class="fas fa-trash-alt"></button>
			  </div>
			  
			</div>
			<div class="containeruser">
				<div class="heading1">
					<h6 class="userli" style="display: inline-block;"><b>User :</b> gerges
					</h6>
				  
				  <a href="#" class="visibility-user transition is-closed"><i class="fas fa-eye"></i></a>    
				</div>
				
				<div class="user transition is-closed">
					<div class="container">
						<div class="row">
							
							<div class="col-md-4">
								<div class="card profile-card-3">
									<div class="background-block">
										<img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
									</div>
									<div class="profile-thumb-block">
										<img src="img/defuserimg.png" alt="profile-image" class="profile"/>
									</div>
									<div class="card-content">
									<h2>Abanoub Rafaat<small>Email : abanoub@yahoo.com</small></h2>
										<span>Phone : 0123127123</span>
									<div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:+0132183213"> <i class="fas fa-phone"></i></a>
									</div>
									</div>
							</div>
						</div>
						</div>
						</div>
				
			  </div>
		</div>
		<div class="containerseller">
			<div class="heading1">
			 
				<h6 class="userli" style="display: inline-block;">     <b>Seller :</b> abanoub
				</h6>
			  <a href="#" class="visibility-seller transition is-closed"><i class="fas fa-eye"></i></a>    
			</div>
			
			<div class="seller transition is-closed">
				<div class="container">
					<div class="row">
						
						<div class="col-md-4">
							<div class="card profile-card-3">
								<div class="background-block">
									<img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
								</div>
								<div class="profile-thumb-block">
									<img src="img/defuserimg.png" alt="profile-image" class="profile"/>
								</div>
								<div class="card-content">
								<h2>Abanoub Rafaat<small>Email : abanoub@yahoo.com</small></h2>
									<span>Phone : 0123127123</span>
								<div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:+0132183213"> <i class="fas fa-phone"></i></a>
								</div>
								</div>
						</div>
					</div>
					</div>
					</div>
			
		  </div>
	</div>		
	<div class="layout-inline row row-bg2">
			  
		<div class="col col-pro layout-inline">
			<a href=""><img src="img/book2.jpg" alt="kitten" /></a>
			<p>The Secret</p>
		  </div>
	  <div class="col col-shipping col-numeric align-center">
		  <div class="col-md">
			 <h6>Country: <p style="display: inline;font-size: 15px;">Egypt</p></h6> 
			 <h6>City: <p style="display: inline;font-size: 15px;">Cairo</p></h6> 
			 <h6>Address: <p style="display: inline;font-size: 15px;">13 st. el haram</p></h6> 
			 <h6>Phone: <p style="display: inline;font-size: 15px;">012312418</p></h6> 
                         <h6>Postal Code: <p style="display: inline;font-size: 15px;">21334</p></h6>
			</div>
	  </div>

	  <div class="col col-qty layout-inline">
		  <input type="numeric" disabled="" value="3" />
	  </div>
	  
	  <div class="col col-vat col-numeric">
		<h6>Method:<br><p style="display: inline;font-size: 15px;">Visa</p></h6> 
		<h6>Visa Info<p style="display: inline;font-size: 15px;"><br>--------<br>CVV: 123241<br>Name: Bebo<br>--------</p></h6>
	  </div>
	  <div class="col col-total col-numeric">    
		 <p> £182.95</p>
		 <button style="background-color: black;color: red; font-size: 20px;" class="fas fa-trash-alt"></button>
	  </div>
	  
	</div>
	<div class="containeruser">
		<div class="heading1">
			<h6 class="userli" style="display: inline-block;"><b>User :</b> gerges
			</h6>
		  
		  <a href="#" class="visibility-user transition is-closed" ><i class="fas fa-eye"></i></a>    
		</div>
		
		<div class="user transition is-closed">
			<div class="container">
				<div class="row">
					
					<div class="col-md-4">
						<div class="card profile-card-3">
							<div class="background-block">
								<img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
							</div>
							<div class="profile-thumb-block">
								<img src="img/defuserimg.png" alt="profile-image" class="profile"/>
							</div>
							<div class="card-content">
							<h2>Abanoub Rafaat<small>Email : abanoub@yahoo.com</small></h2>
								<span>Phone : 0123127123</span>
							<div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:+0132183213"> <i class="fas fa-phone"></i></a>
							</div>
							</div>
					</div>
				</div>
				</div>
				</div>
		
	  </div>
</div>
<div class="containerseller">
	<div class="heading1">
	 
		<h6 class="userli" style="display: inline-block;">     <b>Seller :</b> abanoub
		</h6>
	  <a href="#" class="visibility-seller transition is-closed"><i class="fas fa-eye"></i></a>    
	</div>
	
	<div class="seller transition is-closed">
		<div class="container">
			<div class="row">
				
				<div class="col-md-4">
					<div class="card profile-card-3">
						<div class="background-block">
							<img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
						</div>
						<div class="profile-thumb-block">
							<img src="img/defuserimg.png" alt="profile-image" class="profile"/>
						</div>
						<div class="card-content">
						<h2>Abanoub Rafaat<small>Email : abanoub@yahoo.com</small></h2>
							<span>Phone : 0123127123</span>
						<div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:+0132183213"> <i class="fas fa-phone"></i></a>
						</div>
						</div>
				</div>
			</div>
			</div>
			</div>
	
  </div>
</div>	
	
			
		
			 <div class="tf">
				<div class="row layout-inline">
				 <div class="col">
				   <p>Total : £1230</p>
				 </div>
				 <div class="col"></div>
			   </div>
			 </div>         
		</div>
		
	  </div>
	</div>
	      <!--Footer-->
		  <div id="footer">
			<div class="text-center" style="padding-top: 20px;">
				<ul class="list-unstyled list-inline" style=" text-transform: uppercase; letter-spacing: 15px;">
					<i onclick="window.open('_blank')"  class="fab fa-facebook fa-2x " aria-hidden="true" style ="color:#3b5999;"></i>
					<i onclick="window.open('_blank')" class="fab fa-instagram fa-2x"aria-hidden="true" style ="color:#cd486b"></i>
					<i onclick="window.open('_blank')" class="fab fa-twitter fa-2x"aria-hidden="true" style ="color:#55acee"></i>
					<i onclick="window.open('_blank')" class="fab fa-youtube fa-2x"aria-hidden="true" style ="color:#cd201f" ></i>
				</ul>
				</div>
			</div>
			<div class="footer-copyright py-3 text-center">
				<small>© 2020 Copyright:
					<a href="https://www.facebook.com/xXlBebolXx">Abanoub Rafaat</a></small>            </div>
		</div>
		
			<!--End of Footer-->
	  <script src="js/jquery-3.3.1.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  <script src="js/cart.js"></script>
  <script>
var containers = document.getElementsByClassName('visibility-user');

Array.from(containers).forEach(element => {

	element.onclick = () => {
var user = element.parentElement.parentElement.getElementsByClassName('user')[0];

	   console.log(element);
	   
	   if (element.className.includes('is-closed')) {
		 element.className = element.className.replace('is-closed', 'is-open');
		 element.textContent = 'close';
		 user.className = user.className.replace('is-closed', 'is-open');
	   } else {
		 element.className = element.className.replace('is-open', 'is-closed');
		 element.textContent = 'view'; 
		 user.className = user.className.replace('is-open', 'is-closed');
	   }
	}
});
	</script>
	  <script>
var containers = document.getElementsByClassName('visibility-seller');

Array.from(containers).forEach(element => {

	element.onclick = () => {
var seller = element.parentElement.parentElement.getElementsByClassName('seller')[0];

	   console.log(element);
	   
	   if (element.className.includes('is-closed')) {
		 element.className = element.className.replace('is-closed', 'is-open');
		 element.textContent = 'close';
		 seller.className = seller.className.replace('is-closed', 'is-open');
	   } else {
		 element.className = element.className.replace('is-open', 'is-closed');
		 element.textContent = 'view'; 
		 seller.className = seller.className.replace('is-open', 'is-closed');
	   }
	}
});
		</script>
</body>
</html> 
