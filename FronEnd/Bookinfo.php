<?php 
    require_once '../PagesController/LoginCheck.php';
?>

<?php
    require_once '../PagesController/bookInfoController.php';
    require_once '../PagesController/CategoryController.php';
    $cat=new CategoryController();
    $rowCat=$cat->getCategoreyByID($ret[0]->getCategory());
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "UTF-8">
        <title><?php echo $ret[0]->getName()?></title>
        <link rel = 'stylesheet' href='Supp/BookInfo.css'>
        <link rel = 'stylesheet' href='test1.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="img/mainlogo.png"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main2.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        
    </head>
<body>
      
	<!--start navbar -->
	<?php
            require_once '../PagesController/DesignController.php';
        ?>
	<!--end navbar -->
        
<!--bookinfo-->

        <div class='all'>
        <div class='bookinfo'>
            <?php echo '<img src="img/'.$ret[0]->getImage().'" alt="Shield Of Hades" width=280px height=400px>';?>
            <ul>
                <li>     <b>Name:</b> <?php echo $ret[0]->getName()?></li>
                <li>     <b>Publisher:</b> <?php echo $ret[0]->getAuthor()?></li>
                                <li>     <b>Book Condition:</b> <?php echo $ret[0]->getCondition()  ?></li>
                                <li>     <b>Category:</b> <?php echo $rowCat[0]->getName(); ?></li>
                <li>     <b>Quantity:</b> <?php echo $ret[0]->getStock()?></li>
                <li>     <b>ISBN:</b> <?php echo $ret[0]->getIsbn() ?></li>
                <li>     <b>Price:</b> <?php echo '$'.$ret[0]->getPrice()  ?></li>
                <div class="containeruser" >
		<div class="heading">
		 
                    <li class="userli" style="display: inline-block;">     <b>Seller:</b> <?php
                        require_once '../Services/CustomerService.php';
                                            $cs=new CustomerService();
                                            $carr=$cs->getCustomerById($ret[0]->getCustomer_id());
                                            echo $carr[0]->getName();
                    
                    ?></li>
		  <a class="visibility-user transition is-closed"><i class="fas fa-eye"></i></a>    
		</div>
		
		<div class="user transition is-closed">
			<div class="container">
				<div class="row">
					<?php 
                                            
                                            echo '<div class="col-md-4">
						<div class="card profile-card-3">
							<div class="background-block">
								<img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
							</div>
							<div class="profile-thumb-block">
								<img src="img/defuserimg.png" alt="profile-image" class="profile"/>
							</div>
							<div class="card-content">
							<h2>'.$carr[0]->getName().'<small>Email : '.$carr[0]->getEmail().'</small></h2>
								<span>Phone : '.$carr[0]->getPhone().'</span>
							<div class="icon-block"><a ><i class="fas fa-envelope"></i></a><a href="tel:'.$carr[0]->getPhone().'"> <i class="fas fa-phone"></i></a>
							</div>
							</div>
					</div>
				</div>';
                                            
                                        
                                        ?>
					
				</div>
				</div>
		
	            </div>

                
            </ul>
            
                <?php 
                        if($_SESSION['usId']!=$ret[0]->getCustomer_id())
                        {
                           echo '<button type="button" onclick="document.location = \'Cart.php?bookid='.$ret[0]->getId().'\'" class="fa fa-shopping-cart" >Add To Cart</button>';
                 
                        }
                        ?>
            </div>
    
        <div class="overview1 text-center" >
            <div class="container">
                    <h2 class="h1">description</h2>
                    <p>
                        <?php echo $ret[0]->getDescription()?>
                    </p>
                    <?php 
                    if(isset($_GET['cat']))
                    {
                        echo '<a href="Category1.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'">View Other Books</a>';
                    }elseif ($_GET['search']) {
                        echo '<a href="Category1.php?search='.$_GET['search'].'">View Other Books</a>';
                    }
                    ?>
                    
                    
        
                </div>
            </div>
            <!-- End Overview -->
       

        </div>
        <!--book info-->
        
        
       
            <!--Footer Start-->
            <div id="footer" style="text-align: center; position: relative">


              <div class="text-center" style="padding-top: 20px">
                  <ul class="list-unstyled list-inline" style=" text-transform: uppercase; letter-spacing: 15px;">
                      <i onclick="window.open('_blank')"  class="fab fa-facebook fa-2x " aria-hidden="true" style ="color:#3b5999;"></i>
                      <i onclick="window.open('_blank')" class="fab fa-instagram fa-2x"aria-hidden="true" style ="color:#cd486b"></i>
                      <i onclick="window.open('_blank')" class="fab fa-twitter fa-2x"aria-hidden="true" style ="color:#55acee"></i>
                      <i onclick="window.open('_blank')" class="fab fa-youtube fa-2x"aria-hidden="true" style ="color:#cd201f" ></i>
  
                  </ul>
              </div>
  
              <div class="footer-copyright py-3 text-center" style="margin: 30px">
                  <small>© 2020 Copyright:
                   <a style="text-decoration: none;" href="https://www.facebook.com/xXlBebolXx">Abanoub Rafaat</a></small>  
                  </div>
          </div>
         <!-- Footer end-->
         <script src="js/jquery-3.3.1.min.js"></script>
         <script src="js/popper.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/cart.js"></script>
       <script>
           $('.visibility-user').on('click',function(){
       
  var $btn =  $(this);
  var $user = $('.user');
  console.log($btn);
  
  if ($btn.hasClass('is-closed')) {
    $btn.addClass('is-open');
    $btn.text('close')
    $user.addClass('is-open');     
    $user.removeClass('is-closed');
    $btn.removeClass('is-closed');
     
  } else {
    $btn.removeClass('is-open');
    $btn.text('view')
    $user.removeClass('is-open');     
    $user.addClass('is-closed');
    $btn.addClass('is-closed');
  }

                  
});
       </script>
    </body>
</html>