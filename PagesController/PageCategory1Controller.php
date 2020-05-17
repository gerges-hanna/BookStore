<?php

include_once '../Services/BookService.php';


if(!isset($_GET['cat']) && !isset($_GET['search']))
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
            if(strlen($arr[$i]->getName())>19)
            {
                $name=substr($arr[$i]->getName(), 0,19)."...";
            }  else {
                $name =$arr[$i]->getName();
            }
            
            echo '<li>
                        <div class="Product">
                        <a style="width=200px;height=200px;" href="Bookinfo.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'&book='.$arr[$i]->getId().'" class="img"><img src="img/'.$arr[$i]->getImage().'"/></a>
                        <a href="Bookinfo.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'&book='.$arr[$i]->getId().'" class="name" >'.$name.'</a>
                        <div>   $'.$arr[$i]->getPrice().'</div>
                           <a href="Bookinfo.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'&book='.$arr[$i]->getId().'"class="cart">Show Book</a>
                        </div>
                     </li>';
        }
    }
    
    function ShowBooksSearch($search)
    {
        $book2=new BookService();
        $arr=$book2->getBookBySearchBar($search);
        for($i=0;$i<count($arr);$i++)
        {
            if(strlen($arr[$i]->getName())>25)
            {
                $name=substr($arr[$i]->getName(), 0,25)."...";
            }  else {
                $name =$arr[$i]->getName();
            }
            echo '<li>
                        <div class="Product ">
                        <a href="Bookinfo.php?search='.$search.'&book='.$arr[$i]->getId().'" class="img"><img src="img/'.$arr[$i]->getImage().'"/></a>
                        <a href="Bookinfo.php?search='.$search.'&book='.$arr[$i]->getId().'" class="name" >'.$name.'</a>
                        <div>   $'.$arr[$i]->getPrice().'</div>
                           <a href="Bookinfo.php?search='.$search.'&book='.$arr[$i]->getId().'"class="cart">Show More</a>
                        </div>
                     </li>';
        }
    }
        
}
/* <a  class="cart">Add to cart</a>*/