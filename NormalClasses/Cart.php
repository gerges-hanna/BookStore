<?php


class Cart {
    private $id;
    private $cartDetails;
    private $total;
    
    function getId() {
        return $this->id;
    }

    function getCartDetails() {
        return $this->cartDetails;
    }

    function getTotal() {
        return $this->total;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCartDetails($cartDetails) {
        $this->cartDetails = $cartDetails;
    }

    function setTotal($total) {
        $this->total = $total;
    }


}
