<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Gerges hanna FCI-H
 */
class User {
    
    //put your code here
    private $ID;
    private $name;
    private $email;
    private $password;
    private $userType;
   
    
    function getID() {
        return $this->ID;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getUserType() {
        return $this->userType;
    }

    function setID($ID) {
        $this->ID = $ID;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setUserType($userType) {
        $this->userType = $userType;
    }



    
    
}
