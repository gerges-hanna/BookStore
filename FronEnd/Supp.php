<?php 
    require_once '../PagesController/LoginCheck.php';
?>
<!doctype html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Categories1.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="css/main1.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="img/mainlogo.png"/>
        
        <title>Categories</title>
</head>
<body>
    
      
	
	<!--start navbar -->
	<?php
            require_once '../PagesController/DesignController.php';
        ?>
	<!--end navbar -->
        
<br>
<br>
<br>
    <!--Contet-->
<div class="Supp">               
    <h1 style="bottom: 150px"><strong>Categories</strong></h1>
<div class="Supp" style="bottom: 150px">
    <?php
        if($_SESSION['usType']!=1)
        {
            echo '<div class="addbook"> <a href="addBook.php">Add <i class="fas fa-book fa-1x" style=" color: black;"></i> Book</a> </div>';
        }
    ?>
    <br>
    <br>
    <br>
    <br>
    <div class="allbooks"> <a href="Category1.php?cat=0&catname=All Books">Show All</a> </div>
    <ul style="list-style-type: none;text-align: center;">
       
        <li>
            <?php
                include_once '../PagesController/CategoryController.php';
                $t=new CategoryController();
                $t->ShowCategory();
            ?>
        </li>
    </ul> 
</div>            
</div>



    <!--End of Content-->
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
</body>

</html>