<?php

include_once '../Services/BookService.php';


if($_GET['cat']==NULL)
{
    header('Location:http://localhost/BookStore/FronEnd/Supp.php');
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageCategory1Controller
 *
 * @author Gerges hanna FCI-H
 */
class PageCategory1Controller {
    //put your code here
    
    function test()
    {
        echo 'test';  
    }
    
   function ShowBooks()
    {
        $book2=new BookService();
        $arr=$book2->getBookByCat($_GET['cat']);
        for($i=0;$i<count($arr);$i++)
        {
            echo '<li>
                        <div class="Product">
                        <a href="Bookinfo.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'&book='.$arr[$i]->getId().'" class="img"><img src="img/'.$arr[$i]->getImage().'"/></a>
                        <a href="Bookinfo.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'&book='.$arr[$i]->getId().'" class="name" >'.$arr[$i]->getName().'</a>
                        <div>$'.$arr[$i]->getPrice().'</div>
                           <a href="Bookinfo.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'&book='.$arr[$i]->getId().'"class="cart">Show More</a>
                        </div>
                     </li>';
        }
    }
}
/* <a  class="cart">Add to cart</a>*/