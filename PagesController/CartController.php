<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include_once '../Services/BookService.php';
    include_once '../Services/CartService.php';
    include_once '../Services/CustomerService.php';
/**
 * Description of CartController
 *
 * @author Gerges hanna FCI-H
 */
class CartController {
    public $tax=2.99;
    function checkIsSet()
    {
        
        if(isset($_GET['bookid']))
        {


            $bo=new Book(); 
            $book=new BookService();
            $cart=new CartService();
            $info=new Cart();

            Cart::$flag=0;



            $check=$cart->getAllInCartByID($_SESSION['usId']);
            for($i=0;$i<count($check);$i++)
            {
                if($check[$i]->getBook_id()==$_GET['bookid'])
                {
                    Cart::$flag=1;
                    break;
                }
            }


            $ret=$book->getBookById($_GET['bookid']);
            if(Cart::$flag==0)
            {

                echo $ret[0]->getName().' '.$ret[0]->getCustomer_id().' '.$_SESSION['usId'];
                $info->setBook_id($_GET['bookid']);
                $info->setCustomer_id($_SESSION['usId']);
                $info->setSalesman_id($ret[0]->getCustomer_id());
                $info->setQuantity($_GET['qua']);
                $cart->createCart($info);
            }  else {

                echo $cart->UpdateQuantity($_GET['qua'], $ret[0]->getCustomer_id(), $_SESSION['usId'], $_GET['bookid']);

            }
            $bo->setId($_GET['bookid']);
            $bo->setStock('-'.$_GET['qua']);
            $book->UpdateBookQuantity($bo);
            header('Location:http://localhost/BookStore/FronEnd/Cart.php');
        }
        if(isset($_GET['bookiddel']))
        {
            $bo=new Book(); 
            $book=new BookService();
            $cart=new CartService();
            $cart->remove($_GET['bookiddel'], $_GET['customer'], $_GET['seller']);
            $bo->setId($_GET['bookiddel']);
            $bo->setStock($_GET['quantityb']);
            $book->UpdateBookQuantity($bo);
            header('Location:http://localhost/BookStore/FronEnd/Cart.php');
        }
        if(isset($_GET['dell']))
        {
            $cart=new CartService();
            $cart->removeAll($_SESSION['usId']);
            header('Location:http://localhost/BookStore/FronEnd/Cart.php');
        }

    }
    function cartOrders()
    {
        $ca=new CartService();
                        $arr=$ca->getAllInCartByID($_SESSION['usId']);
                        $total=NULL;
                        for($i=0;$i<count($arr);$i++)
                        {
                            $cs=new CustomerService();
                            $bo=new BookService();
                            $id=$arr[$i]->getBook_id();
                            $barr=$bo->getBookById($id);
                            $carr=$cs->getCustomerById($arr[$i]->getSalesman_id());
                            if($i%2==0)
                            {
                                echo '<div class="layout-inline row">
			  
			  <div class="col col-pro layout-inline">
			<a href=""><img src="img/'.$barr[0]->getImage().'" alt="'.$barr[0]->getName().'" /></a>	
				<p style="color:black">'.$barr[0]->getName().'</p>
			  </div>
			  
			  <div class="col col-price col-numeric align-center ">
				<p>'.$carr[0]->getName().'</p>
			  </div>
	  
			  <div class="col col-qty layout-inline">
				
				  <input type="numeric" disabled="" value="'.$arr[$i]->getQuantity().'" />
				
			  </div>
			  
			  <div class="col col-vat col-numeric">
				<p>£'.$this->tax.'</p>
			  </div>
			  <div class="col col-total col-numeric">              
				 <p>'.$arr[$i]->getQuantity()*$barr[0]->getPrice().'</p>
                            <button onclick="document.location = \'Cart.php?bookiddel='.$arr[$i]->getBook_id().'&seller='.$arr[$i]->getSalesman_id().'&customer='.$arr[$i]->getCustomer_id().'&quantityb='.$arr[$i]->getQuantity().'\'"  style="background-color: black;color: rgb(255, 255, 255); font-size: 25px;" class="fas fa-trash-alt"></button>
			  </div>
			  
			</div>';
                            }  else {
                                echo '<div class="layout-inline row row-bg2">
	  
			  <div class="col col-pro layout-inline">
				<a href=""><img src="img/'.$barr[0]->getImage().'" alt="'.$barr[0]->getName().'" /></a>	
				<p style="color:black">'.$barr[0]->getName().'</p>
			  </div>
			  
			  <div class="col col-price col-numeric align-center ">
				<p>'.$carr[0]->getName().'</p>
			  </div>
	  
			  <div class="col col-qty layout-inline">
				
				  <input type="numeric" disabled="" value="'.$arr[$i]->getQuantity().'" />
				
			  </div>
			  
			  <div class="col col-vat col-numeric">
				<p>£'.$this->tax.'</p>
			  </div>
			  <div class="col col-total col-numeric">              
				 <p>'.$arr[$i]->getQuantity()*$barr[0]->getPrice().'</p>
				 <button style="background-color: black;color: rgb(255, 255, 255); font-size: 25px;" class="fas fa-trash-alt" onclick="document.location = \'Cart.php?bookiddel='.$arr[$i]->getBook_id().'&seller='.$arr[$i]->getSalesman_id().'&customer='.$arr[$i]->getCustomer_id().'&quantityb='.$arr[$i]->getQuantity().'\'"></button>
			  </div>
			  
			</div>';
                            }
                            $total=$total+($arr[$i]->getQuantity()*$barr[0]->getPrice());                      
                        }
                        
                        echo '<div class="tf">
			   <div class="row layout-inline">
				 <div class="col">
                                 <p>TAX : '.$this->tax*count($arr) .'</p>
                                 <p>Order Price:'.$total.' </p>
				   <p>Total :'.$total.' pluse " '.$this->tax*count($arr).' tax "</p>
				 </div>
				 <div class="col"></div>
			   </div>
				
			 </div> ';
                        
    }
    //put your code here
}
