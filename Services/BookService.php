<?php

include_once  './DBMangement.php';
include_once  '../NormalClasses/Book.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookService
 *
 * @author Gerges hanna FCI-H
 */
class BookService {
    //put your code here
    private $query;
    function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
    } 
    
    Function DeleteBook($id)
    {
        $this->query="DELETE FROM book WHERE id=".$id;
        $connect=new DBMangement();
        $connect->ConnectStart();
        $res=$connect->executequery($this->query);
        $connect->CloseConnect();
        if($res!=1)
        {
            $this->function_alert("Error");
        }  
        
                
    }
    
    Function UpdateBook(Book $book)
    {
        $this->query='UPDATE book SET name="'.$book->getName().'",description="'.$book->getDescription().'",price='.$book->getPrice().',quantity='.$book->getStock().',isbn="'.$book->getIsbn().'",image_url="'.$book->getImage().'",author_name="'.$book->getAuthor().'",condition_id='.$book->getCondition().',customer_id='.$book->getCustomer_id().',status_id='.$book->getStatus().',category_id='.$book->getCategory().' WHERE id = '.$book->getId().';';
//'.$book->getId().','.$book->getName().','.$book->getDescription().','.$book->getPrice().','.$book->getStock().','.$book->getIsbn().','.$book->getImage().','.$book->getAuthor().','.$book->getCondition().','.$book->getCustomer_id().','.$book->getStatus().','.$book->getCategory().'
        $connect=new DBMangement();
        $connect->ConnectStart();
        $res=$connect->executequery($this->query);
        $connect->CloseConnect();
        if($res!=1)
        {
            $this->function_alert("Error");
        }  
    }
    Function CreateBook(Book $book)
    {
        $this->query='INSERT INTO  book (id, name, description,price, quantity, isbn, image_url, author_name, condition_id, customer_id, status_id, category_id) '
                . 'VALUES ('.$book->getId().',"'.$book->getName().'","'.$book->getDescription().'",'.$book->getPrice().','.$book->getStock().',"'.$book->getIsbn().'","'.$book->getImage().'","'.$book->getAuthor().'",'.$book->getCondition().','.$book->getCustomer_id().','.$book->getStatus().','.$book->getCategory().')';
        //'.$book->getId().','.$book->getName().','.$book->getDescription().','.$book->getPrice().','.$book->getStock().','.$book->getIsbn().','.$book->getImage().','.$book->getAuthor().','.$book->getCondition().','.$book->getCustomer_id().','.$book->getStatus().','.$book->getCategory().'
        $connect=new DBMangement();
        $connect->ConnectStart();
        $res=$connect->executequery($this->query);
        $connect->CloseConnect();
        if($res!=1)
        {
            $this->function_alert("Error");
        }
        
    }
    
}
// just for Test
$tes=new BookService();
//$tes->DeleteBook("asc");

/*
    INSERT INTO `book`(id, name, description, price, quantity, isbn, image_url,
 *  author_name, condition_id, customer_id, status_id, category_id) 
    VALUES (4,"fdswe","wefw",50,66,"wefef","wefef","sfedv",1,1,1,1)
 *  */

/*
UPDATE `book` SET `name`="ss",`description`="wqd",`price`=84,`quantity`=5,`isbn`="ww",`image_url`="wdqw",`author_name`="ewf",`condition_id`=1,`customer_id`=1,`status_id`=1,`category_id`=1 WHERE id = 7;
 *  */
    $tw=new Book();
    $tw->setId(7);
    $tw->setName("php5");
    $tw->setDescription("php");
    $tw->setPrice(99);
    $tw->setStock(99);
    $tw->setIsbn("php");
    $tw->setImage("php");
    $tw->setAuthor("php");
    $tw->setCondition(1);
    $tw->setCustomer_id(1);
    $tw->setStatus(1);
    $tw->setCategory(1);

    $tes->UpdateBook($tw);