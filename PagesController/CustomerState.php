<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../PagesController/UserState.php';
/**
 * Description of CustomerState
 *
 * @author Gerges hanna FCI-H
 */
class CustomerState implements UserState{
    public function showNavBar() {
        echo 
        '<li class="nav-item">
          <a class="nav-link" href="purchase.php" style="color: white;"><i class="fas fa-list" style="font-size:25px "></i> my purchase</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="MyBooks.php" style="color: white;" ><i class="fas fa-book-reader" style="font-size:25px "></i> My Books</a>
  </li>';
    }

//put your code here
}
