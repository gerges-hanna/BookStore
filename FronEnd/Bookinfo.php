<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>BOOK INFO</title>
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
            <img src="img/book1.jpg" alt="Shield Of Hades" width=250px height=400px>
            <ul>
                <li>     <b>Name:</b> The Loneliest girl in the universe</li>
                <li>     <b>Publisher:</b> Lauren James</li>
                <li>     <b>Seller:</b> User</li>
                <li>     <b>Category:</b> Fiction</li>
                <li>     <b>Quantity:</b> 40</li>
                <li>     <b>ISBN:</b> 2012391</li>
                <li>     <b>Book Condition:</b> Fairly new</li>
            </ul>
            <button type="button" class="fa fa-shopping-cart">Add To Cart</button>
        </div>
    
        <div class="overview1 text-center" >
            <div class="container">
                    <h2 class="h1">description</h2>
                    <p>A surprising and gripping sci-fi thriller with a killer twist

                        The daughter of two astronauts, Romy Silvers is no stranger to life in space. But she never knew how isolating the universe could be until her parents’ tragic deaths left her alone on the Infinity, a spaceship speeding away from Earth.
                        
                        Romy tries to make the best of her lonely situation, but with only brief messages from her therapist on Earth to keep her company, she can’t help but feel like something is missing. It seems like a dream come true when NASA alerts her that another ship, the Eternity, will be joining the Infinity.
                        
                        Romy begins exchanging messages with J, the captain of the Eternity, and their friendship breathes new life into her world. But as the Eternity gets closer, Romy learns there’s more to J’s mission than she could have imagined. And suddenly, there are worse things than being alone….
                        
                        Now nominated as a YALSA Quick Pick!
                    </p>
                    <?php echo '<a href="Category1.php?cat='.$_GET['cat'].'">View Other Books</a>'; ?>
        
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