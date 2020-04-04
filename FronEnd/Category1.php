<?php
require_once '../PagesController/PageCategory1Controller.php';
session_start();
$_SESSION['catName']=$_GET['catname'];
$_SESSION['catID']=$_GET['cat'];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_GET['catname'];?></title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="img/mainlogo.png"/>
        <link rel="stylesheet" type="text/css" href="css/Supplement.css">
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
        
            
         <!--Product Content Start-->   
         <br>
         <br>
     
         <h1 style="text-align: center;font-weight: 3000;font-size: 70px;margin-bottom: 30px;"><?php echo $_GET['catname'];?></h1>
         <br>         
<div class="products" style="margin-bottom: 70px; font-family: verdana;">
    <a class="fa fa-book" href="addBook.php" style="margin-left: 55px;font-size: 30px">Add Book</a>
        <div class="container">
        <ul
                        <?php 
                                $bookCat=new PageCategory1Controller();
                                $bookCat->ShowBooks();
                        ?>
        </ul>
</div>
    
    </div>
    
     <!--End-->
    
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