<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../PagesController/AdminState.php';
require_once '../PagesController/CustomerState.php';
require_once '../PagesController/UserState.php';
/**
 * Description of StateConfigurations
 *
 * @author Gerges hanna FCI-H
 */
class StateConfigurations implements UserState {
    //put your code here
    private $state;
    
    function getState() {
        return $this->state;
    }

    function setState($state) {
        $this->state = $state;
    }
    function __construct($state) {
        $this->state = $state;
    }

    public function showNavBar() {
        
        if($this->state=="1" ||$this->state==1 || $this->state=="admin")
        {
            $ob=new AdminState();
            return $ob->showNavBar();
        }else if($this->state=="0" ||$this->state==0 || $this->state=="user")
        {
            $ob=new CustomerState();
            return $ob->showNavBar();
        }
    }

}
