<?php

include '../NormalClasses/Category.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author user
 */
class Book extends Category {
    //put your code here
    private $id;
    private $customer_id;
    private $name;
    private $author;
    private $price;
    private $stock;
    private $description;
    private $category;
    private $image;
    private $isbn;
    private $condition;
    private $status;
    
    

    
    function getId() {
        return $this->id;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getName() {
        return $this->name;
    }

    function getAuthor() {
        return $this->author;
    }

    function getPrice() {
        return $this->price;
    }

    function getStock() {
        return $this->stock;
    }

    function getDescription() {
        return $this->description;
    }

    function getCategory() {
        return $this->category;
    }

    function getImage() {
        return $this->image;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getCondition() {
        return $this->condition;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setCondition($condition) {
        $this->condition = $condition;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
}
