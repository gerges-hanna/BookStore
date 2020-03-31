<?php

include './User.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRole
 *
 * @author Gerges hanna FCI-H
 */
class UserRole extends User{
    //put your code here
    private $userID;
    private $roleName;
    private $read;
    private $write;
    private $delete;
    
    
    public function getUserID() {
        return $this->userID;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function getRead() {
        return $this->read;
    }

    public function getWrite() {
        return $this->write;
    }

    public function getDelete() {
        return $this->delete;
    }

    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function setRoleName($roleName) {
        $this->roleName = $roleName;
    }

    public function setRead($read) {
        $this->read = $read;
    }

    public function setWrite($write) {
        $this->write = $write;
    }

    public function setDelete($delete) {
        $this->delete = $delete;
    }



    

}
