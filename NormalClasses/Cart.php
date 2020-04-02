<?php


class Cart {
    private $customer_id;
    private $salesman_id;
    private $book_id;
    private $quantity;
    function getCustomer_id() {
        return $this->customer_id;
    }

    function getSalesman_id() {
        return $this->salesman_id;
    }

    function getBook_id() {
        return $this->book_id;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setSalesman_id($salesman_id) {
        $this->salesman_id = $salesman_id;
    }

    function setBook_id($book_id) {
        $this->book_id = $book_id;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }


}
