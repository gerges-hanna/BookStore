<?php 
    require_once '../PagesController/userController.php';
    $us=new userController();
    session_start();
    if(isset($_POST['trash']))
    {
        $cs->deletCustomer($_POST['trash']);
    }
    
    
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
	  <link rel="stylesheet" href="css/main1.css">
	  <link rel="stylesheet" href="users.css">
    <title>Users</title>
</head>
<body>
    <!--start upper bar -->
	<div class="upper-bar">
	    <div class="container">
	        <div class="row">
		      <div class="col-sm">
			   <?php
                           echo '<i class="fas fa-envelope"></i> <span>'.$_SESSION['usName'].'</span>';
                           ?> 
			   </div>
			  <div class="col-sm">
			    <span>We Are Here to Serve!</span>
				<a class="get-quote" href="Login.php">Sign Out</a>
			  </div>
		    </div>
	    </div>
	</div>
	<!-- end upper bar -->
	<!--start navbar -->
	<?php
          require_once '../PagesController/DesignController.php';
        ?>
	<!--end navbar -->
	<!--Card --><!--Card -->
<div class="users">
	<div class="container">
    	<div class="row">
    		
    		<?php
                    $us->getUsers();
                ?>

	</div>
</div>
	</div>
	<!--Card --><!--Card -->
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
</body>
</html> 
