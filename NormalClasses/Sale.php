<?php

class Sale {
    private $id;
    private $book;
    private $amount;   
    
    function getId() {
        return $this->id;
    }

    function getBook() {
        return $this->book;
    }

    function getAmount() {
        return $this->amount;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setBook($book) {
        $this->book = $book;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }



}
