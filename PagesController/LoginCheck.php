<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    session_start();
    if($_SESSION['usId']==NULL)
    {
        header('Location:http://localhost/BookStore/FronEnd/Login_v14/index.php');
    }
