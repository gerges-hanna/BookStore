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
    private $phone;
    private $can_read;
    private $can_write;
    private $can_update;
    private $can_delete;
            
    
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

    function getPhone() {
        return $this->phone;
    }

    function getCan_read() {
        return $this->can_read;
    }

    function getCan_write() {
        return $this->can_write;
    }

    function getCan_update() {
        return $this->can_update;
    }

    function getCan_delete() {
        return $this->can_delete;
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

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setCan_read($can_read) {
        $this->can_read = $can_read;
    }

    function setCan_write($can_write) {
        $this->can_write = $can_write;
    }

    function setCan_update($can_update) {
        $this->can_update = $can_update;
    }

    function setCan_delete($can_delete) {
        $this->can_delete = $can_delete;
    }




    
    
}
