<?php
    include '../PagesController/bookInfoController.php';
    if(isset($_GET['submit']))
    {
        echo 'submit';
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "UTF-8">
        <title><?php echo $ret[0]->getName()?></title>
        <link rel = 'stylesheet' href='Supp/bookinfo.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="img/mainlogo.png"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main1.css">
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
            <?php echo '<img src="img/'.$ret[0]->getImage().'" alt="Shield Of Hades" width=250px height=400px>';?>
            <ul>
                <li>     <b>Name:</b> <?php echo $ret[0]->getName()?></li>
                <li>     <b>Publisher:</b> <?php echo $ret[0]->getAuthor()?></li>
                <li>     <b>Book Condition:</b> <?php echo $ret[0]->getCondition()  ?></li>
                <li>     <b>Category:</b> <?php echo $_GET['catname']?></li>
                <li>     <b>Quantity:</b> <?php echo $ret[0]->getStock()?></li>
                <li>     <b>ISBN:</b> <?php echo $ret[0]->getIsbn() ?></li>
                <li>     <b>Price:</b> <?php echo '$'.$ret[0]->getPrice()  ?></li>
            </ul>
            
                <?php 
                        echo '<button type="button" onclick="document.location = \'Cart.php?bookid='.$ret[0]->getId().'\'" class="fa fa-shopping-cart" >Add To Cart</button>';
                ?>
            </div>
    
        <div class="overview1 text-center" >
            <div class="container">
                    <h2 class="h1">description</h2>
                    <p>
                        <?php echo $ret[0]->getDescription()?>
                    </p>
                    <?php echo '<a href="Category1.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'">View Other Books</a>'; ?>
        
                </div>
            </div>
            <!-- End Overview -->
       

        </div>
        <!--book info-->
        
        
       
            <!--Footer Start-->
            <div id="footer" style="text-align: center; position: relative">


              <div class="text-center" style="padding-top: 20px">
                  <ul class="list-unstyled list-inline" style=" text-transform: uppercase; letter-spacing: 15px;">
                      <i onclick="window.open('_blank')"  class="fa fa-facebook fa-2x " aria-hidden="true" style ="color:#3b5999;"></i>
                      <i onclick="window.open('_blank')" class="fa fa-instagram fa-2x"aria-hidden="true" style ="color:#cd486b"></i>
                      <i onclick="window.open('_blank')" class="fa fa-twitter fa-2x"aria-hidden="true" style ="color:#55acee"></i>
                      <i onclick="window.open('_blank')" class="fa fa-youtube fa-2x"aria-hidden="true" style ="color:#cd201f" ></i>
  
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
    </body>
</html>