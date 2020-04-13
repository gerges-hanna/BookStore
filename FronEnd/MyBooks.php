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
          <link rel="shortcut icon" type="image/png" href="img/mainlogo.png" />
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/main2.css">
          <link rel="stylesheet" href="css/purchase.css">
    <title>My Book</title>
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
			<span class="shopper"></span>My Books
		  </h1>
		  
<!--		  <a href="#" class="visibility-cart transition is-open">X</a>    -->
		</div>
		
		<div class="cart transition is-open">
		  
<!--		  <button class="btn btn-update">Clear History</button>-->
		  
		  
		  <div class="table">
			
			<div class="layout-inline row th">
			  <div class="col col-pro">Products</div>
			  <div class="col col-qty align-center">QTY</div>
			  <div class="col">Order Price</div>
			</div>
			
			
<!--	from 				-->
<?php require_once '../PagesController/MyBooks.php';  ?>
	
	
<!--                      to here-->

		
			 


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
