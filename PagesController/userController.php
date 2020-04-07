<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userController
 *
 * @author Gerges hanna FCI-H
 */
require_once '../Services/CustomerService.php';

class userController {
    //put your code here
    function getUsers()
    {
        $cs=new CustomerService();
        $carr=$cs->getCustomer();
        for($i=0;$i<count($carr);$i++)
                    {
                        echo '<div class="col-md-4">
    		    <div class="card profile-card-3">
    		        <div class="background-block">
    		            <img src="img/userbck.jpg" alt="profile-sample1" class="background"/>
    		        </div>
    		        <div class="profile-thumb-block">
    		            <img src="img/defuserimg.png" alt="profile-image" class="profile"/>
    		        </div>
    		        <div class="card-content">
					<h2>'.$carr[$i]->getName().'<small>Email : '.$carr[$i]->getEmail().'</small></h2>
						<span>Phone : '.$carr[$i]->getPhone().'</span>
					<div class="icon-block"><a href="#"><i class="fas fa-envelope"></i></a><a href="tel:'.$carr[$i]->getPhone().'"> <i class="fas fa-phone"></i></a>
						<form  method="POST">
						<button class="fas fa-trash" name="trash" value="'.$carr[$i]->getID().'"></button>
					</form>
					</div>
                    </div>
            </div>
		</div>';
                    }
    }
}
