<?php


require_once '../Services/LoginService.php';
    if(isset($_POST['submit']))
    {
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $obj=new User();
        $Tes=new LoginService();
        $obj=$Tes->Login($user, $pass);
        if($obj!=NULL)
        {
            session_start();
            $_SESSION['usName']=$obj->getName();
            $_SESSION['usId']=$obj->getID();
            $_SESSION['usType']=$obj->getUserType();
            header('Location:http://localhost/BookStore/FronEnd/index.php');
        }  else {
            echo 'Username Or Password Incorrect';
        }
    }

