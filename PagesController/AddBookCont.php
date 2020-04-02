<?php

include_once '../Services/BookService.php';
include '../PagesController/CategoryController.php';

$cat=new CategoryController();
$catArr=$cat->getCategorey();
if(isset($_GET['submit']))
{
   if( $_GET['cat']=="Empty")
   {
       echo 'Please Select Category';
   }  
   else {
    session_start();
    
    $book=new Book();
    $book->setName($_GET['name']);
    $book->setDescription($_GET['desc']);
    $book->setPrice($_GET['price']);
    $book->setStock($_GET['quantity']);
    $book->setIsbn($_GET['isbn']);
    $book->setImage($_GET["myfile"]);
    $book->setAuthor("Author");
    $book->setCondition($_GET['bookCon']);
    $book->setCustomer_id($_SESSION['usId']);
    $book->setStatus("Available");
    $book->setCategory($_GET['cat']);
      
      $bookServ=new BookService();
      $ret=$bookServ->CreateBook($book);
      echo $ret;
      
       
  }
   
}