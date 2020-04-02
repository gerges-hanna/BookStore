<?php
include './DBMangement.php';
include '../NormalClasses/Cart.php';

class CartService {
    public function getAllInCart(){
        $db = new DBMangement();
        $db->ConnectStart();
        $query = "SELECT * FROM cart";
        $res = $db->executequery($query);
        $arr = array();
        while($row = mysqli_fetch_assoc($res)){
            $ct = new Cart();
            $ct->setBook_id($row['book_id']);
            $ct->setCustomer_id($row['customer_id']);
            $ct->setSalesman_id($row['Salesman_id']);
            $ct->setQuantity($row['quantity']);
            $arr = $ct ;
        }
        $db->CloseConnect();
        return $arr ;
    }
    
    function createCart(Cart $cart){
        $con =new DBMangement();
        $con->ConnectStart();
        $query = 'INSERT INTO cart(book_id, customer_id, Salesman_id, quantity) VALUES( "'.$cart->getBook_id().'" , "'.$cart->getCustomer_id().'" , "'.$cart->getSalesman_id().'" ,"'.$cart->getQuantity().'" )';
        $res = $con->executequery($query);
        $con->CloseConnect();
        if($res!=1)
        {
            $this->function_alert("Error");
        }  else {
            echo 'Done';
        }
    }
    function remove($bookId,$custId,$buyerId){
        $connection = new DBMangement();
        $connection ->ConnectStart();
        $query = "Delete from cart where customer_id = '$custId' && book_id = '$bookId' && Salesman_id = '$buyerId' ";
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
        $query = "Delete from cart where customer_id = '$custId' ";
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
