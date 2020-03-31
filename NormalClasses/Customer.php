<?php

include './User.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Gerges hanna FCI-H
 */
class Customer extends User {
    //put your code here
    private $phone;
    
    
    
    
    function getPhone() {
        return $this->phone;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }



    
    
    
}