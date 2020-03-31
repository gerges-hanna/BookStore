<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author Gerges hanna FCI-H
 */
class Order {
    
    //put your code here
    private $ID;
    private $orderDate;
    private $customerID;
    private $total;
    
    public static $SalesList=array(); //Just for sale Objects 


    public function getID() {
        return $this->ID;
    }

    public function getOrderDate() {
        return $this->orderDate;
    }

    public function getCustomerID() {
        return $this->customerID;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
    }

    public function setCustomerID($customerID) {
        $this->customerID = $customerID;
    }

    public function setTotal($total) {
        $this->total = $total;
    }


}
