<?php

require_once '../Services/OrderService.php';
    require_once '../Services/BookService.php';
    require_once '../Services/CustomerService.php';
    require_once '../Services/AddressService.php';
    $book=new BookService();
    $bArr=$book->getBookBySeller($_SESSION['usId']);
    
    $count=0;
    for($i=0;$i<count($bArr);$i++)
    {
                    
                    echo
                    '<div class="layout-inline row row-bg2">

                    <div class="col col-pro layout-inline">
                            <a ><img src="img/'.$bArr[$i]->getImage().'" alt="'.$bArr[$i]->getName().'" /></a>
                            <p>'.$bArr[$i]->getName().'</p>
                      </div>
              

              <div class="col col-qty layout-inline">
                      <input type="numeric" disabled="" value="'.$bArr[$i]->getStock().'" />
              </div>

              
              <div class="col col-total col-numeric">    
                     <p> $'.$bArr[$i]->getPrice().'</p>

              </div>

            </div>
            <div class="containeruser">
                    <div class="heading1">
                            <h6 class="userli" style="display: inline-block;"><b>User :</b> gerges
                            </h6>

                      <a  class="visibility-user transition is-closed" ><i class="fas fa-eye"></i></a>    
                    </div>

                    <div class="user transition is-closed">
                            <div class="container">
                                    <div class="row">

                                            <div class="col-md-4">
                                                    <div class="card profile-card-3">
                                                            <div class="background-block">
                                                                    <img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
                                                            </div>
                                                            <div class="profile-thumb-block">
                                                                    <img src="img/defuserimg.png" alt="profile-image" class="profile"/>
                                                            </div>
                                                            <div class="card-content">
                                                            <h2>Abanoub Rafaat<small>Email : abanoub@yahoo.com</small></h2>
                                                                    <span>Phone : 0123127123</span>
                                                            <div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:+0132183213"> <i class="fas fa-phone"></i></a>
                                                            </div>
                                                            </div>
                                            </div>
                                    </div>
                                    </div>
                                    </div>

              </div>
    </div>
    <div class="containerseller">
            <div class="heading1">

                    <h6 class="userli" style="display: inline-block;">     <b>Seller :</b> abanoub
                    </h6>
              <a class="visibility-seller transition is-closed"><i class="fas fa-eye"></i></a>    
            </div>

            <div class="seller transition is-closed">
                    <div class="container">
                            <div class="row">

                                    <div class="col-md-4">
                                            <div class="card profile-card-3">
                                                    <div class="background-block">
                                                            <img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
                                                    </div>
                                                    <div class="profile-thumb-block">
                                                            <img src="img/defuserimg.png" alt="profile-image" class="profile"/>
                                                    </div>
                                                    <div class="card-content">
                                                    <h2>Abanoub Rafaat<small>Email : abanoub@yahoo.com</small></h2>
                                                            <span>Phone : 0123127123</span>
                                                    <div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:+0132183213"> <i class="fas fa-phone"></i></a>
                                                    </div>
                                                    </div>
                                    </div>
                            </div>
                            </div>
                            </div>

      </div>
    </div>	';
    }
