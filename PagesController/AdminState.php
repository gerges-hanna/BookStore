<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../PagesController/UserState.php';
/**
 * Description of AdminState
 *
 * @author Gerges hanna FCI-H
 */
class AdminState implements UserState {
    
    public function showNavBar() {
        echo 
            '<li class="nav-item">
              <a class="nav-link" href="purchase.php" style="color: white;"><i class="fas fa-clipboard-list" style="font-size:25px" ></i>Transactions</a>
            </li>
            <li class="nav-item">
        <a class="nav-link" href="Users.php" style="color: white;" ><i class="fas fa-user" style="font-size:25px" ></i>Users</a>
      </li>';
    }

//put your code here
}
