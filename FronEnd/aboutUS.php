<?php 
    require_once '../PagesController/LoginCheck.php';
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
	  <link rel="stylesheet" href="css/main2.css">
    <title>Home</title>
</head>
<body>
    
        
	<!--start navbar -->
	<?php
            require_once '../PagesController/DesignController.php';
        ?>
	<!--end navbar -->
        
        
        <!-- Page Content -->

        <div class="abtus">
        <div id="container" >
            <a id="text" style="color: #efefef"><h2>"We are Here to serve you , so enjoy our site"</h2></a>
            <dd> <h2 style="color: crimson">OUR AIM</h2></dd>

            <div id="content" font-family: Georgia, Times New Roman, Times,serif;>

                <strong><dd> Book Store products guarantees customer satisfaction.</dd></strong><br>
                <p>
                    Book Store is a leading international book retailer with a unique offer <br> over 20 million books and delivery with a little tax worldwide (with no minimum spend).

                    We ship thousands of books everyday from our fulfillment centers <br>in Egypt, United Kingdom, and Melbourne, Australia, to more than 130 countries across the world <br> displaying prices in 37 different local currencies.

Our vision is to provide “All Books Available to All” by improving selection, access and affordability of books and addition of books.
                </p>
            </div>
        </div>
            </div>
        
        		<!--Start Testimonials-->
		<div class="testimonial">
				<div class="overlay"></div>
				<div class="container">
						<div id="testimonial" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#testimonial" data-slide-to="0" class="active"></li>
								<li data-target="#testimonial" data-slide-to="1"></li>
								<li data-target="#testimonial" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">						
										<div class="carousel-caption d-none d-block">
                                                                                    <img src="img/testimg1.jpg"  alt="...">
											<h3>Abanoub Rafaat</h3>
											<span>Admin</span>
										</div>
								</div>
								<div class="carousel-item">
										<div class="carousel-caption d-none d-block">
                                                                                    <img src="img/testimg1.jpg"  alt="...">
											<h3>Abanoub Rafaat</h3>
											<span>Admin</span>
										</div>
								</div>
								<div class="carousel-item">
										<div class="carousel-caption d-none d-block">
                                                                                    <img src="img/testimg1.jpg"  alt="...">
											<h3>Abanoub Rafaat</h3>
											<span>Admin</span>
										</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#testimonial" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#testimonial" role="button" data-slide="next" >
                                                            <span class="carousel-control-next-icon active" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
				</div>
				</div>
			<!--End Testimonials-->
        <!-- End -->

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
  <script src="js/main1.js"></script>
</body>
</html> 



