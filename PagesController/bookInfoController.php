<?php

include_once '../Services/FundamentalFactory.php';
    $temp=new FundamentalFactory();
    $ret=$temp->getType("book")->getAllItemsByID($_GET['book']);


class bookInfoController {
    //put your code here
    
}
