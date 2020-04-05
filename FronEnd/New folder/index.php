<?php 
    require_once '../PagesController/LoginCheck.php';
    require_once '../PagesController/HomeController.php';
    $home=new HomeController();
    
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
    <title>Home</title>
</head>
<body>
    <!--start upper bar -->
	<div class="upper-bar">
	    <div class="container">
	        <div class="row">
		      <div class="col-sm">
			    
                           <i class="fas fa-envelope"></i> <span><?php  echo $_SESSION['usName'];?></span> 
			  </div>
			  <div class="col-sm">
			    <span>We Are Here to Serve!</span>
				<a class="get-quote" href="Login.php">Sign Out</a>
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
        
	<!--start slider -->
	 
	<div class="slider">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#main-slider" data-slide-to="0" class="active"></li>
	  <li data-target="#main-slider" data-slide-to="1"></li>
	  <li data-target="#main-slider" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		  <h1>YOUR<br><span>BOOK</span> <br>IS READY</h1>
		  <div class="overlay"></div>
	  <div class="carousel-item carousel-one active">
				<video autoplay muted loop class="myVideo">
						<source src="slider0.mp4" type="video/mp4">
					</video>
	  </div>
	  <div class="carousel-item carousel-two ">
	  </div>
	  <div class="carousel-item carousel-three ">
	  </div>
	</div>
  </div>
	  </div>
	  <!--end slider -->
	<!--Start Features-->
	<div class="features text-center">
	  <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <i class="fas fa-book-reader fa-2x rounded-circle"></i>
					<h2>ONLINE</h2>
					<h3>READING</h3>
					<p>You can read your favourite book now online without any effort ,
						just register now and pick your book for free . </p>
				</div>
				<div class="col-sm-6 col-lg-3">
					<i class="fas fa-dollar-sign fa-2x rounded-circle"></i>
					<h2>ONLINE</h2>
					<h3>SELLING</h3>
					<p>	Just Upload your Book and our online Book Store helps you sell textbooks and used books for the best price .
					</p>
				</div>
				<div class="col-sm-6 col-lg-3">
					<i class="far fa-credit-card fa-2x rounded-circle"></i>
					<h2>ONLINE</h2>
					<h3>STORE</h3>
					<p> Buy your Book now with Visa or MasterCard in one click! View our store section signup and add your book to the cart.</p>
				</div>
				<div class="col-sm-6 col-lg-3">
					<i class="fas fa-users-cog fa-2x rounded-circle"></i>
					<h2>ONLINE</h2>
					<h3>SERVICE</h3>
					<p>Have questions about selling books online? Can't find the ISBN? Will your book be accepted in its current condition?
						 Is your book counterfeit? We have many tips available 
					</p>
				</div>
		  </div>
		</div>
	</div>
	<!-- End Features -->
	<!-- Start Overview -->
	<div class="overview text-center" >
    <div class="container">
			<h2 class="h1">Who Are We?</h2>
			<p>We pride ourselves in being the world's largest online Website for Buying&Selling Books .<br>
			</p>
<!--			<a href="" target="_blank">Register</a>-->

		</div>
	</div>
	<!-- End Overview -->
	<!-- Start Featured Work -->
	<div class="featured-work text-center">
		<div class="container">
			<h2>Most Sold Books</h2>
<!--			<p>"Select your category"</p>-->
      <ul class="list-unstyled row">
<!--				<li data-class="ALL" class="active col-md">ALL </li>
				<li data-class=".FICTION" class="col-md">Fiction</li>
				<li data-class=".ART" class="col-md">Art And Culture</li>
				<li data-class=".ARC" class="col-md">Architecture</li>
				<li data-class=".HORROR" class="col-md">Horror</li>
				<li data-class=".SPORTS" class="col-md">Sports</li>
				<li data-class=".SCIENCE" class="col-md">Science</li>-->
			</ul>
		</div>
		<div class="lol">
			<div class="row shuffle-images">
				<div class="col-md">
					<img class="FICTION" src="img/latestBooks/b1.jpg" alt="" />
				   </div>
				   <div class="col-md">
					<img class="SCIENCE" src="img/latestBooks/b2.jpg" alt="" />
				   </div>
				   <div class="col-md">
					<img class="FICTION" src="img/latestBooks/b3.jpg" alt="" />
				   </div>
				   <div class="col-md">
					 <img class="SCIENCE" src="img/latestBooks/b4.jpg" alt="" />
				 </div>
			 </div>
			 <div class="row shuffle-images">
				<div class="col-md">
				   <img class="ART" src="img/latestBooks/b5.jpg" alt="" />
				</div>
				<div class="col-md">
				   <img class="SPORTS" src="img/latestBooks/b6.jpg" alt="" />
				</div>
				<div class="col-md">
				   <img class="ART" src="img/latestBooks/b7.jpg" alt="" />
				</div>
				<div class="col-md">
				   <img class="ARC" src="img/latestBooks/b8.jpg" alt="" />
				</div>
			   </div>
			   <div class="row shuffle-images">
				<div class="col-md">
				   <img class="SPORTS" src="img/latestBooks/b9.jpg" alt="" />
				</div>
				<div class="col-md">
				   <img class="ARC" src="img/latestBooks/b10.jpg" alt="" />
				</div>
				<div class="col-md">
				   <img class="HORROR" src="img/latestBooks/b11.jpg" alt="" />
				</div>
				<div class="col-md">
				   <img class="HORROR" src="img/latestBooks/b12.jpg" alt="" />
				</div>
			   </div>
		   </div>
		</div>

	<!-- End Featured Work -->
	<!-- Start Latest Post -->
	<div class="latest-post">
    <div class="container">
			<h2 class="text-center">OUR SERVICES</h2>
			<p class="section-box text-center ">We provide free payed services for all users.</p>
      <div class="row">
        <div class="col-md-6 col-lg-4">
						<div class="card">
							<img src="img/eb1.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h4 class="card-title">Buy Books</h4>
								<h6 class="card-subtitle mb-2 text-muted">dummy</h6>
								<p class="card-text">You can surf various Books of your choice and add it to the Cart.</p>
                                                                <a href="../FronEnd/Supp.php" class="card-link">Show Books</a>
							</div>
						</div>
				</div>
				<div class="col-md-6 col-lg-4">
						<div class="card">
							<img src="img/eb3.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h4 class="card-title">My Orders</h4>
								<h6 class="card-subtitle mb-2 text-muted">dummy</h6>
								<p class="card-text">Click to view your pervious orders with all the needed information.</p>
								<a href="#" class="card-link">View</a>
							</div>
						</div>
				</div>
				<div class="col-md-6 col-lg-4">
						<div class="card">
							<img src="img/eb2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h4 class="card-title">Sell Books</h4>
								<h6 class="card-subtitle mb-2 text-muted">dummy</h6>
								<p class="card-text">Upload your Book now with its details to be offered to a million of users.</p>
                                                                <a href="../FronEnd/addBook.php" class="card-link">Upload</a>
							</div>
						</div>
					</div>
			  </div>
			</div>
		</div>
	<!-- End Latest Post -->
		<!--Start Testimonials-->
		<div class="testimonial">
				<div class="overlay"></div>
				<div class="container">
						<div id="testimonial" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
                                                                <?php $home->slideShow() ?>
							</ol>
							<div class="carousel-inner">
                                                            <?php $home->slidInfo(); ?>
							</div>
							<a class="carousel-control-prev" href="#testimonial" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#testimonial" role="button" data-slide="next">
								<span class="carousel-control-next-icon active" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
				</div>
				</div>
			
			<!--End Testimonials-->
	<!--Start Pricing Table -->
	<div class="pricing-table text-center">
			<div class="container">
				<h2>Pricing Table</h2>
				<p class="section-box  ">Price is what you pay. Value is what you get.</p>
				<div class="row">
					<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">1 MONTH</h4>
									<h6 class="card-subtitle mb-2 text-muted">New Offer</h6>
									<p class="card-text">$99/<span>Month</span</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                    </ul>
									<a href="" class="card-link">BUY NOW</a>
								</div>
							</div>
					</div>
					<div class="col-md-6 col-lg-4">
							<div class="card corporate">
								<div class="card-body">
									<h4 class="card-title">1 YEAR</h4>
									<h6 class="card-subtitle mb-2 text-muted">New Offer</h6>
									<p class="card-text">$199/<span>Year</span</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">dummy</li>
										<li class="list-group-item">dummy</li>
										<li class="list-group-item">dummy</li>
										<li class="list-group-item">dummy</li>
										<li class="list-group-item">dummy</li>
									</ul>
									<a href="" class="card-link">BUY NOW</a>
								</div>
							</div>
					</div>
					<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">PERMANENT</h4>
									<h6 class="card-subtitle mb-2 text-muted">New Offer</h6>
									<p class="card-text">$4999/<span>Perm</span</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                        <li class="list-group-item">dummy</li>
                                    </ul>
									<a href="" class="card-link">BUY NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!--End Pricing Table -->
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
