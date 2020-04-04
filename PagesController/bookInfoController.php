<?php

include_once '../Services/BookService.php';
    $book=new BookService();
    $ret=$book->getBookById($_GET['book']);


class bookInfoController {
    //put your code here
}
