<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginService
 *
 * @author Gerges hanna FCI-H
 */

include_once  'C:/xampp/htdocs/BookStore/Services/CustomerService.php';

class LoginService {
    //put your code here
    Function Login($email,$pass)
    {
        
        
        $this->query= 'SELECT  COUNT(id) as count , id FROM `user` WHERE email ="'.$email.'" AND password="'.$pass.'"';
//'SELECT id FROM `user` WHERE email ="'.$email.'" AND password="'.$pass.'"';
        $connect=new DBMangement();
        $connect->ConnectStart();
        $res=$connect->executequery($this->query);
        $connect->CloseConnect();
        while ($row = mysqli_fetch_assoc($res)) {
            $rCount=$row['count'];
            $rID=$row['id'];
            
        }
        if($rCount>0)
        {
            $toLogin=new CustomerService();
            $arr=$toLogin->getCustomerById($rID);
            return $arr[0];
        }  else { 
            return NULL;
        }
        
            
        
            
        
    }
    
}


//    $user=$_POST['username'];
//    $pass=$_POST['password'];
//    echo $user;
    //header('Location:http://localhost/BookStore/Services/CustomerService.php');
    /*
    $obj=new User();
    $Tes=new LoginService();
    $obj=$Tes->Login($user, $pass);
    if($obj!=NULL)
    {
        echo "Welcome".$obj->getName();
    }  else {
        echo 'User Or Pass InCorrect';
    }*/
// Just for test
        /*$obj=new User();
        $Tes=new LoginService();
        $obj=$Tes->Login("sdvs", "65165");
        if($obj!=NULL)
        {
            echo $obj->getName();
        }  else {
            echo 'User Or Pass InCorrect';
        }*/