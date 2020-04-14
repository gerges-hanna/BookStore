<!--start upper bar -->
	<div class="upper-bar">
	    <div class="container">
	        <div class="row">
		      <div class="col-sm">
			    <span>Welcome : </span> 
             
                           <i class="fas fa-user"></i> <span><?php  echo $_SESSION['usName'];?></span> 
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
	<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                    <span>Book</span><img src="img/logo.png" style="height: 80px; margin-bottom: 15px;"><span>Store</span>
                   </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"  style="background-color: white;"    ></span>
                </button>
                    
                    <form class="search" action="../FronEnd/Category1.php" method="GET" style="margin:auto;max-width:400px">
                          <input type="text" placeholder="Search.." name="search">
                         <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php"><span class="sr-only">(current)</span><i class="fas fa-home" style="font-size:25px "></i>Home</a>
                      </li>
                      
                      <?php
                        
                        if($_SESSION['usType']==0)
                        {
                            echo 
                            '<li class="nav-item">
                              <a class="nav-link" href="purchase.php" style="color: white;"><i class="fas fa-list" style="font-size:25px "></i> my purchase</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="MyBooks.php" style="color: white;" ><i class="fas fa-book-reader" style="font-size:25px "></i> My Books</a>
                      </li>';
                        }  else if($_SESSION['usType']==1) {
                            echo 
                            '<li class="nav-item">
                              <a class="nav-link" href="purchase.php" style="color: white;"><i class="fas fa-clipboard-list" style="font-size:25px" ></i>Transactions</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="Users.php" style="color: white;" ><i class="fas fa-user" style="font-size:25px" ></i>Users</a>
                      </li>';
                        }
                        echo '<li class="nav-item">
                        <a class="nav-link" href="Supp.php"  style="color: white;"><i class="fas fa-book" style="font-size:25px" ></i> book Categories</a>
                      </li>';
                      if($_SESSION['usType']!=1)
                       {
                       echo ' <li class="nav-item">
                        <a class="nav-link" href="Cart.php" style="color: white;" ><i class="fas fa-shopping-cart" style="font-size:25px "></i>CART</a>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" href="Contact.php" style="color: white;" ><i class="far fa-envelope" style="font-size:25px;"></i>Contact</a>
                      </li>';
                      }
                       
                        	
                      
                                ?>
                    </ul>
                  </div>
                </div>
            </nav>
                <!--end navbar -->