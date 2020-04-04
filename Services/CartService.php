<?php
require_once '../Services/DBMangement.php';
include '../NormalClasses/Cart.php';

class CartService {
    
    function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
    }
    
    function getAllInCart(){
        $db = new DBMangement();
        $db->ConnectStart();
        $query = "SELECT * FROM book_transaction";
        $res = $db->executequery($query);
        $arr = array();
        while($row = mysqli_fetch_assoc($res)){
            $ct = new Cart();
            $ct->setBook_id($row['book_id']);
            $ct->setCustomer_id($row['buyer_id']);
            $ct->setSalesman_id($row['seller_id']);
            $ct->setQuantity($row['amount']);
            $arr[]= $ct ;
        }
        $db->CloseConnect();
        return $arr ;
    }
    
    function createCart(Cart $cart){
        $con =new DBMangement();
        $con->ConnectStart();
        $query = 'INSERT INTO book_transaction(book_id, buyer_id, seller_id, amount) VALUES( "'.$cart->getBook_id().'" , "'.$cart->getCustomer_id().'" , "'.$cart->getSalesman_id().'" ,"'.$cart->getQuantity().'" )';
        $res = $con->executequery($query);
        $con->CloseConnect();
        if($res!=1)
        {
            $this->function_alert("Error");
        }  else {
            echo 'Done';
        }
    }
    function remove($bookId,$custId,$sellerId){
        $connection = new DBMangement();
        $connection ->ConnectStart();
        $query = "Delete from book_transaction where buyer_id = '$custId' && book_id = '$bookId' && seller_id = '$sellerId' ";
        $result = $connection ->executequery($query);
        $connection ->CloseConnect();
        if($result !=1){
            $this->function_alert("Not Deleted");
        }
        else{
            echo 'deleted successfully';
        }
            
    }
    function removeAll($custId){
        $connection = new DBMangement();
        $connection ->ConnectStart();
        $query = "Delete from book_transaction where customer_id = '$custId' ";
        $result = $connection ->executequery($query);
        $connection ->CloseConnect();
        if($result !=1){
            $this->function_alert("Not Deleted");
        }
        else{
            echo 'deleted successfully';
        }
            
    }        
 }
