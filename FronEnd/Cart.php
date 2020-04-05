<?php
    include_once '../Services/BookService.php';
    include_once '../Services/CartService.php';
    include_once '../Services/CustomerService.php';
    session_start();
    if(isset($_GET['bookid']))
    {
        
        
        
        $book=new BookService();
        $cart=new CartService();
        $info=new Cart();
        
        Cart::$flag=0;
        
        
        
        $check=$cart->getAllInCart();
        for($i=0;$i<count($check);$i++)
        {
            if($check[$i]->getBook_id()==$_GET['bookid'])
            {
                Cart::$flag=1;
                break;
            }
        }
        
        
        $ret=$book->getBookById($_GET['bookid']);
        if(Cart::$flag==0)
        {
            
            echo $ret[0]->getName().' '.$ret[0]->getCustomer_id().' '.$_SESSION['usId'];
            $info->setBook_id($_GET['bookid']);
            $info->setCustomer_id($_SESSION['usId']);
            $info->setSalesman_id($ret[0]->getCustomer_id());
            $info->setQuantity(1);
            $cart->createCart($info);
        }  else {
            
            echo $cart->UpdateQuantity(1, $ret[0]->getCustomer_id(), $_SESSION['usId'], $_GET['bookid']);
            
        }
        header('Location:http://localhost/BookStore/FronEnd/Cart.php');
    }
    if(isset($_GET['bookiddel']))
    {
        $cart=new CartService();
        $cart->remove($_GET['bookiddel'], $_GET['customer'], $_GET['seller']);
        header('Location:http://localhost/BookStore/FronEnd/Cart.php');
    }
    if(isset($_GET['dell']))
    {
        $cart=new CartService();
        $cart->removeAll($_SESSION['usId']);
        header('Location:http://localhost/BookStore/FronEnd/Cart.php');
    }
    
    $tax=2.99;
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
	  <link rel="stylesheet" href="css/cart.css">
    <title>Home</title>
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
				<a class="get-quote" href="Login.php" >Sign Out</a>
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
	<div class="containercart">
		<div class="heading">
		  <h1>
			<span class="shopper">s</span> Shopping Cart
		  </h1>
		  
		  <a href="#" class="visibility-cart transition is-open">X</a>    
		</div>
		
		<div class="cart transition is-open">
		  
		  <?php
                              echo '<button class="btn btn-update" onclick="document.location = \'Cart.php?dell=5\'"  >Clear Cart</button>';
                  ?>
		  
		  
		  <div class="table">
			
			<div class="layout-inline row th">
			  <div class="col col-pro">Product</div>
			  <div class="col col-price align-center "> 
				Seller
			  </div>
			  <div class="col col-qty align-center">Quantity</div>
			  <div class="col">TAX</div>
			  <div class="col">Price</div>
			</div>
                      <?php
                        
                        $ca=new CartService();
                        $arr=$ca->getAllInCart();
                        $total=NULL;
                        for($i=0;$i<count($arr);$i++)
                        {
                            $cs=new CustomerService();
                            $bo=new BookService();
                            $id=$arr[$i]->getBook_id();
                            $barr=$bo->getBookById($id);
                            $carr=$cs->getCustomerById($arr[$i]->getSalesman_id());
                            if($i%2==0)
                            {
                                echo '<div class="layout-inline row">
			  
			  <div class="col col-pro layout-inline">
			<a href=""><img src="img/'.$barr[0]->getImage().'" alt="'.$barr[0]->getName().'" /></a>	
				<p>'.$barr[0]->getName().'</p>
			  </div>
			  
			  <div class="col col-price col-numeric align-center ">
				<p>'.$carr[0]->getName().'</p>
			  </div>
	  
			  <div class="col col-qty layout-inline">
				
				  <input type="numeric" disabled="" value="'.$arr[$i]->getQuantity().'" />
				
			  </div>
			  
			  <div class="col col-vat col-numeric">
				<p>£'.$tax.'</p>
			  </div>
			  <div class="col col-total col-numeric">              
				 <p>'.$arr[$i]->getQuantity()*$barr[0]->getPrice().'</p>
				 <button onclick="document.location = \'Cart.php?bookiddel='.$arr[$i]->getBook_id().'&seller='.$arr[$i]->getSalesman_id().'&customer='.$arr[$i]->getCustomer_id().'\'"  style="background-color: black;color: rgb(255, 255, 255); font-size: 25px;" class="fas fa-trash-alt"></button>
			  </div>
			  
			</div>';
                            }  else {
                                echo '<div class="layout-inline row row-bg2">
	  
			  <div class="col col-pro layout-inline">
				<a href=""><img src="img/'.$barr[0]->getImage().'" alt="'.$barr[0]->getName().'" /></a>	
				<p>'.$barr[0]->getName().'</p>
			  </div>
			  
			  <div class="col col-price col-numeric align-center ">
				<p>'.$carr[0]->getName().'</p>
			  </div>
	  
			  <div class="col col-qty layout-inline">
				
				  <input type="numeric" disabled="" value="'.$arr[$i]->getQuantity().'" />
				
			  </div>
			  
			  <div class="col col-vat col-numeric">
				<p>£'.$tax.'</p>
			  </div>
			  <div class="col col-total col-numeric">              
				 <p>'.$arr[$i]->getQuantity()*$barr[0]->getPrice().'</p>
				 <button style="background-color: black;color: rgb(255, 255, 255); font-size: 25px;" class="fas fa-trash-alt" onclick="document.location = \'Cart.php?bookiddel='.$arr[$i]->getBook_id().'&seller='.$arr[$i]->getSalesman_id().'&customer='.$arr[$i]->getCustomer_id().'\'"></button>
			  </div>
			  
			</div>';
                            }
                            $total=$total+($arr[$i]->getQuantity()*$barr[0]->getPrice());
                        }
                        
                        echo '<div class="tf">
			   <div class="row layout-inline">
				 <div class="col">
				   <p>TAX : '.$tax*count($arr) .'</p>
				 </div>
				 <div class="col"></div>
			   </div>
			   <div class="row layout-inline">
				 <div class="col">
				   <p>Total : '.$total.'</p>
				 </div>
				 <div class="col"></div>
			   </div>
				
			 </div> ';
                        
                      ?>

			         
		</div>
		  
		  <a href="#" class="btn btn-update">Order Now</a>
		
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
</body>
</html>
