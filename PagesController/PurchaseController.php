<?php

    require_once '../Services/OrderService.php';
    require_once '../Services/BookService.php';
    require_once '../Services/CustomerService.php';
    require_once '../Services/AddressService.php';
    $or=new OrderService();
    $book=new BookService();
    $address=new AddressService();
    if($_SESSION['usType']==0)
    {
        $OrArr=$or->getOrderById($_SESSION['usId']);
    }  else if($_SESSION['usType']==1) {
        $OrArr=$or->getOrders();
    }

    $count=0;
    for($i=0;$i<count($OrArr);$i++)
    {
                    $count=$count+$OrArr[$i]->getTotal();
                    $boArr=$book->getBookById($OrArr[$i]->getBook_id());
                    $adArr=$address->getAddressById($OrArr[$i]->getAddressID());
                    echo
                    '<div class="layout-inline row row-bg2">

                    <div class="col col-pro layout-inline">
                            <a ><img src="img/'.$boArr[0]->getImage().'" alt="'.$boArr[0]->getName().'" /></a>
                            <p style="color:black">'.$boArr[0]->getName().'</p>
                      </div>
              <div class="col col-shipping col-numeric align-center">
                      <div class="col-md">
                             <h6>Country: <p style="display: inline;font-size: 15px;">'.$adArr[0]->getCountry().'</p></h6> 
                             <h6>City: <p style="display: inline;font-size: 15px;">'.$adArr[0]->getCity().'</p></h6> 
                             <h6>Address: <p style="display: inline;font-size: 15px;">'.$adArr[0]->getAddress().'</p></h6> 
                             <h6>Phone: <p style="display: inline;font-size: 15px;">'.$adArr[0]->getPhone().'</p></h6> 
                             <h6>Postal Code: <p style="display: inline;font-size: 15px;">'.$adArr[0]->getPostal().'</p></h6>
                            </div>
              </div>

              <div class="col col-qty layout-inline">
                      <input type="numeric" disabled="" value="'.$OrArr[$i]->getQuantity().'" />
              </div>

              <div class="col col-vat col-numeric">
                    <h6>Method:<br><p style="display: inline;font-size: 15px;">'.$OrArr[$i]->getPayment_method().'</p></h6> 
                        </div>
              <div class="col col-total col-numeric">    
                     <p> $'.$OrArr[$i]->getTotal().'</p>

              </div>

            </div>
            
 ';
                            /*   <div class="containeruser">
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
    </div>	*/
    }