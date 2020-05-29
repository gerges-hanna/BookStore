<?php

require_once '../Services/OrderService.php';
require_once '../Services/CustomerService.php';
require_once '../Services/CartService.php';
require_once '../Services/BookService.php';
/**
 * Description of FundamentalFactory
 *
 * @author Gerges hanna FCI-H
 */
class FundamentalFactory {
    //put your code here
    function getType($type)
    {
        if($type=="book")
            return new BookService();
        if($type=="order")
            return new OrderService();
        if($type=="cart")
            return new CartService();
        if($type=="user" || $type=="customer")
            return new CustomerService();
        
    }
}
