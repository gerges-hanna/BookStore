    <?php 
require_once '../PagesController/LoginCheck.php';
require_once '../Services/OrderService.php';
require_once '../Services/CustomerService.php';
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
	  <link rel="stylesheet" href="css/users.css">
    <title>Users</title>
</head>
<body>
   
	<!--start navbar -->
	<?php
          require_once '../PagesController/DesignController.php';
        ?>
	<!--end navbar -->
	<!--Card --><!--Card -->

        <?php
                                $or=new OrderService();
                                $orArr=$or->getOrderbyBookId($_GET['book']);
                                for($i=0;$i<count($orArr);$i++)
                                {
                                    $cs=new CustomerService();
                                    $csArr=$cs->getAllItemsByID($orArr[$i]->getCustomerID());
                                    echo '<div class="users">
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
                            
					<h2>'.$csArr[0]->getName().'<small>Email : '.$csArr[0]->getEmail().' </small></h2>
						<span>Phone : '.$csArr[0]->getPhone().'</span>
                                                <h6><small>Quantity : '.$orArr[$i]->getQuantity().' </small></h6>
					<div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:'.$csArr[0]->getPhone().'"> <i class="fas fa-phone"></i></a>
						<form  method="POST">
					</form>
					</div>
                    </div>
            </div>
		</div>
	</div>
</div>
	</div>';   
                                }
                            ?>
	<!--Card --><!--Card -->
    <!--Footer-->
    <div id="footer">
        <div class="text-center" style="padding-top: 20px;">
            <ul class="list-unstyled list-inline" style=" text-transform: uppercase; letter-spacing: 15px;">
                <i onclick="window.open('https://www.facebook.com/xXlBebolXx','_blank')"  class="fab fa-facebook fa-2x " aria-hidden="true" style ="color:#3b5999;"></i>
                <i onclick="window.open('https://www.instagram.com/illll_bebo_illll/','_blank')" class="fab fa-instagram fa-2x"aria-hidden="true" style ="color:#cd486b"></i>
                <i onclick="window.open('https://web.whatsapp.com/','_blank')" class="fab fa-whatsapp fa-2x"aria-hidden="true" style ="color:greenyellow"></i>
                <i onclick="window.open('https://www.youtube.com/channel/UC5ykJ9vGoQIfsV8DK-3jnBg/featured','_blank')" class="fab fa-youtube fa-2x"aria-hidden="true" style ="color:#cd201f" ></i>
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