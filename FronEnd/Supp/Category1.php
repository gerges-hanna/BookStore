
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_GET['cat'];?></title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="../img/mainlogo.png"/>
        <link rel="stylesheet" type="text/css" href="../css/singlebook.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main1.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        
    </head>
<body>
    
	<!--start navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                   <a class="navbar-brand" href="#">
                    <span>Book</span><img src="../img/logo.png" style="height: 80px; margin-bottom: 15px;"><span>Store</span>
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
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">About</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;" >Work</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../Supp.php"  style="color: white;">Books</a>
                      </li>	
                       <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;" >Contact</a>
                      </li>	
                    </ul>
                  </div>
                </div>
            </nav>
                <!--end navbar -->
            
         <!--Product Content Start-->   
         <br>
         <br>
     
         <h1 style="text-align: center;font-weight: 3000;font-size: 70px;margin-bottom: 30px;"><?php echo $_GET['cat'];?></h1>
         <br>         
<div class="products" style="margin-bottom: 70px; font-family: verdana;">
    <a class="fa fa-book" href="../Login_v14/addBook.php" style="margin-left: 55px;font-size: 30px">Add Book</a>
        <div class="container">
        <ul>
                <li>
                        <div class="Product">
                        <a href="Bookinfo.php" class="img"><img src="../img/book1.jpg"/></a>
                        <a href="Bookinfo.php" class="name" >The Loneliest Girl in the Universe</a>
                        <div>$29.9</div>
                        <a href="#" class="cart">Add to cart</a>
                        </div>

                </li>
                <li>
                        <div class="Product" >
                        <a href="Bookinfo.php" class="img"><img src="../img/book2.jpg"/></a>
                        <a href="Bookinfo.php" class="name" >Blue Is A Darkness Weakened By Light</a>
                        <div>$99.99</div>
                        <a href="#" class="cart">Add to cart</a>
                        </div>

                </li>
                <li>

                        <div class="Product" >
                                <a href="Bookinfo.php" class="img"><img src="../img/book4.jpg"/></a>
                                <a href="Bookinfo.php" class="name" >Stephen King’s Cujo horrible psyche</a>
                                <div>$63.99</div>
                                <a href="#" class="cart">Add to cart</a>
                        </div>
                
                </li>
                <li>
                        <div class="Product" >
                                <a href="Bookinfo.html" class="img"><img src="../img/book3.jpg"/></a>
                                <a href="Bookinfo.html" class="name" >THE UPSTAIRS ROOM Kate Murray-Browne</a>
                                <div>$59.99</div>
                                <a href="#" class="cart">Add to cart</a>
                        </div>
        
                </li>
                <li>
                        <div class="Product" >
                        <a href="Bookinfo.html" class="img"><img src="../img/book1.jpg"/></a>
                        <a href="Bookinfo.html" class="name" >The Loneliest Girl in the Universe</a>
                        <div>$29.9</div>
                        <a href="#" class="cart">Add to cart</a>
                        </div>

                </li>
                <li>
                        <div class="Product" >
                        <a href="Bookinfo.php" class="img"><img src="../img/book2.jpg"/></a>
                        <a href="Bookinfo.php" class="name" >Blue Is A Darkness Weakened By Light</a>
                        <div>$99.99</div>
                        <a href="#" class="cart">Add to cart</a>
                        </div>

                </li>
                <li>

                        <div class="Product" >
                            <a href="Bookinfo.php" class="img"><img src="../img/book4.jpg"/></a>
                                <a href="Bookinfo.php" class="name" >Stephen King’s Cujo horrible psyche</a>
                                <div>$63.99</div>
                                <a href="#" class="cart">Add to cart</a>
                        </div>
                
                </li>
                <li>
                        <div class="Product" >
                                <a href="Bookinfo.php" class="img"><img src="../img/book3.jpg"/></a>
                                <a href="Bookinfo.php" class="name" >THE UPSTAIRS ROOM Kate Murray-Browne</a>
                                <div>$59.99</div>
                                <a href="#" class="cart">Add to cart</a>
                        </div>
        
                </li>
                <li>
                        <div class="Product" >
                        <a href="Bookinfo.php" class="img"><img src="../img/book1.jpg"/></a>
                        <a href="Bookinfo.php" class="name" >The Loneliest Girl in the Universe</a>
                        <div>$29.9</div>
                        <a href="#" class="cart">Add to cart</a>
                        </div>

                </li>
                <li>
                        <div class="Product" >
                        <a href="Bookinfo.php" class="img"><img src="../img/book2.jpg"/></a>
                        <a href="Bookinfo.php" class="name" >Blue Is A Darkness Weakened By Light</a>
                        <div>$99.99</div>
                        <a href="#" class="cart">Add to cart</a>
                        </div>

                </li>
                <li>

                        <div class="Product" >
                                <a href="Bookinfo.php" class="img"><img src="../img/book4.jpg"/></a>
                                <a href="Bookinfo.php" class="name" >Stephen King’s Cujo horrible psyche</a>
                                <div>$63.99</div>
                                <a href="#" class="cart">Add to cart</a>
                        </div>
                
                </li>
                <li>
                        <div class="Product" >
                                <a href="Bookinfo.php" class="img"><img src="../img/book3.jpg"/></a>
                                <a href="Bookinfo.php" class="name" >THE UPSTAIRS ROOM Kate Murray-Browne</a>
                                <div>$59.99</div>
                                <a href="#" class="cart">Add to cart</a>
                        </div>
        
                </li>
            
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
     <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    </body>
</html>