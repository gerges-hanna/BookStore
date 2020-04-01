<!doctype html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Supplements.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="css/main1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="img/mainlogo.png"/>
        
        <title>Supplements</title>
</head>
<body>
    
	<!--start navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
           <a class="navbar-brand" href="#">
            <span>Book</span><img src="img/logo.png" style="height: 80px; margin-bottom: 15px;"><span>Store</span>
           </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"  style="background-color: white;"    ></span>
        </button>
        <div >
        <input id="search-bar" type="text" placeholder="Search.." >
    </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">About</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;" >Work</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="Supp.php"  style="color: white;">Books</a>
              </li>	
               <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;" >Contact</a>
              </li>	
            </ul>
          </div>
        </div>
    </nav>
        <!--end navbar -->
<br>
<br>
<br>
    <!--Contet-->
<div class="Supp">               
    <h1 style="bottom: 150px"><strong>Categories</strong></h1>
<div class="Supp" style="bottom: 150px">
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
<footer>
<div id="footer">
<div class="text-center" style="padding-top: 20px">
    <ul class="list-unstyled list-inline" style=" text-transform: uppercase; letter-spacing: 15px;">
        <i onclick="window.open('_blank')"  class="fa fa-facebook fa-2x " aria-hidden="true" style ="color:#3b5999;"></i>
        <i onclick="window.open('_blank')" class="fa fa-instagram fa-2x"aria-hidden="true" style ="color:#cd486b"></i>
        <i onclick="window.open('_blank')" class="fa fa-twitter fa-2x"aria-hidden="true" style ="color:#55acee"></i>
        <i onclick="window.open('_blank')" class="fa fa-youtube fa-2x"aria-hidden="true" style ="color:#cd201f" ></i>
    </ul>
</div>
<div class="footer-copyright py-3 text-center">
    <small>© 2020 Copyright:
    <a href="https://www.facebook.com/xXlBebolXx">Abanoub Rafaat</a></small>    </div>
</div>
</footer>
    <!--End of Footer-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>