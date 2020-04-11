
<?php
require_once '../PagesController/PageCategory1Controller.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php 
                if(isset($_GET['cat']))
                {
                    echo $_GET['catname'];
                }elseif ($_GET['search']) {
                    
                    echo $_GET['search'];
                }
    ?></title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="img/mainlogo.png"/>
        <link rel="stylesheet" type="text/css" href="css/subbook.css">
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
        
            
         <!--Product Content Start-->   
         <br>
         <br>
     
         <h1 style="text-align: center;font-weight: 3000;font-size: 70px;margin-bottom: 20px;">
             <?php 
            if(isset($_GET['cat']))
                {
                    echo $_GET['catname'];
                }elseif ($_GET['search']) {
                    
                    echo 'Search ('.$_GET['search'].')';
                }
         ?>
         </h1>
         <br>         
<div class="products" style="margin-bottom: 70px; font-family: verdana;"> 
    
        <div class="container">
            <div class="row" >
                <ul>
                        <?php 
                                $bookCat=new PageCategory1Controller();
                                
                                if(isset($_GET['cat']))
                                {
                                    $bookCat->ShowBooks();
                                }elseif ($_GET['search']) {
                                    $bookCat->ShowBooksSearch($_GET['search']);
                                }
                        ?>
        </ul>
</div>
        </div>
    </div>
    
     <!--End-->
    
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
    </body>
</html>