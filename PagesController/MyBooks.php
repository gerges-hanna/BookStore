<?php

require_once '../Services/OrderService.php';
    require_once '../Services/BookService.php';
    require_once '../Services/CustomerService.php';
    require_once '../Services/AddressService.php';
   
    $book=new BookService();
    $bArr=$book->getBookBySeller($_SESSION['usId']);
       require_once '../PagesController/CategoryController.php';
    $cat=new CategoryController();
    $rowCat=$cat->getCategoreyByID($bArr[0]->getCategory());
    $count=0;
    for($i=0;$i<count($bArr);$i++)
    {
                    
                    echo
                    '
                        	<div class="layout-inline row row-bg2">
			  
		<div class="col col-pro layout-inline">
                            <a ><img src="img/'.$bArr[$i]->getImage().'" alt="'.$bArr[$i]->getName().'" /></a>
                            <p style="color:black">'.$bArr[$i]->getName().'</p>
                      </div>
	  <div class="col col-shipping col-numeric align-center">
		  <div class="col-md">
                         <h6>Category: <p style="display: inline;font-size: 15px;">'.$rowCat[0]->getName(). '</p></h6> 
			 <h6>Publisher: <p style="display: inline;font-size: 15px;">'.$bArr[$i]->getAuthor().'</p></h6> 
			 <h6>ISBN: <p style="display: inline;font-size: 15px;">'.$bArr[$i]->getIsbn().'</p></h6> 
                         <h6>Condition: <p style="display: inline;font-size: 15px;">'.$bArr[$i]->getCondition().'</p></h6>
			</div>
	  </div>

	<div class="col col-qty layout-inline">
                      <input type="numeric" disabled="" value="'.$bArr[$i]->getStock().'" />
              </div>
	  
	   <div class="col col-desc col-numeric">    
                     <p>'.$bArr[$i]->getDescription().'</p>

              </div>
	  <div class="col col-total col-numeric">    
		 <p> $'.$bArr[$i]->getPrice().'</p>
		 <button style="background-color: black;color: white; font-size: 20px;" class="fas fa-trash-alt"></button>
	  </div>
	  
	</div>
           ';
    }
