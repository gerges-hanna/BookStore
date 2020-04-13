<?php
require_once  '../NormalClasses/Address.php';
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
class Order extends Address {
    
    //put your code here
    private $ID;
    private $orderDate;
    private $customerID;
    private $total;
    private $sipping_method;
    private $payment_method;
    private $book_id;
    private $quantity;
    private $AddressID;
    
    function getAddressID() {
        return $this->AddressID;
    }

    function setAddressID($AddressID) {
        $this->AddressID = $AddressID;
    }

        function getSipping_method() {
        return $this->sipping_method;
    }

    function getPayment_method() {
        return $this->payment_method;
    }

    static function getSalesList() {
        return self::$SalesList;
    }

    function setSipping_method($sipping_method) {
        $this->sipping_method = $sipping_method;
    }

    function setPayment_method($payment_method) {
        $this->payment_method = $payment_method;
    }

    static function setSalesList($SalesList) {
        self::$SalesList = $SalesList;
    }

    
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
    function getBook_id() {
        return $this->book_id;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setBook_id($book_id) {
        $this->book_id = $book_id;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }




}
