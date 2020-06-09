<?php
require_once  '../Services/DBMangement.php';
require_once  '../NormalClasses/Order.php';
require_once '../Services/CommonFundamentalMethod.php';

class OrderService implements CommonFundamentalMethod {

   function getOrderForUser(Order $order){
       
       $con =new DBMangement();
       $con->ConnectStart();
       $query = 'SELECT * FROM purchase WHERE customer_id= "'.$order->getCustomerID().'" ORDER BY id DESC; ';
       $res = $con->executequery($query);
       $ar=array();
       
       while ($row = mysqli_fetch_assoc($res)){
           
           $or =new Order();
           $or->setID($row['id']);
           $or->setCustomerID($row['customer_id']);
           $or->setSipping_method($row['shipping_method_id']);
           $or->setPayment_method($row['payment_method_id']);
           $or->setAddressId($row['address_id']);
           $or->setTotal($row['total']);
           $or->setOrderDate($row['date']);
           $ar[]=$or;
           
           print_r($row);
       }
       $con->CloseConnect();
   }
     function getOrderbyBookId($bookId){
       
       $con =new DBMangement();
       $con->ConnectStart();
       $query = 'SELECT * FROM purchase WHERE book_id= "'.$bookId.'" ORDER BY id DESC; ';
       $res = $con->executequery($query);
       $ar=array();
       
       while ($row = mysqli_fetch_assoc($res)){
           
           $or =new Order();
           $or->setID($row['id']);
           $or->setCustomerID($row['customer_id']);
           $or->setQuantity($row['quantity']);
           $or->setAddressId($row['address_id']);
           $or->setTotal($row['total']);
           $or->setOrderDate($row['date']);
           $ar[]=$or;
       }
       $con->CloseConnect();
       return $ar;
   }
   
   
   function createOrder(Order $order)
   {
       $con =new DBMangement();
       $con->ConnectStart();
       $query = 'INSERT INTO `purchase`(`customer_id`, `shipping_method_id`, `payment_type`, `address_id`, `total`, `book_id`, `quantity`)'
               . ' VALUES ( "'.$order->getCustomerID().'",'
               . ' '.$order->getSipping_method().','
               . ' "'.$order->getPayment_method().'",'
               . ' "'.$order->getAddressID().'",'
               . ' "'.$order->getTotal().'",'
               . ' "'.$order->getBook_id().'",'
               . ' "'.$order->getQuantity().'") ';
       $res = $con->executequery($query);
       $con->CloseConnect();
       if($res!=1)
        {
           echo 'Error';
        }
        return $res;
   }

   
    public function delete($id) {
        //doesn't use 
    }

    public function getAllItems() {
         $db = new  DBMangement();
         $db->ConnectStart();
        $query = "SELECT * FROM purchase ORDER BY id DESC; ";
        $res = $db->executequery($query);
        $arr = array() ;

       while ($row=  mysqli_fetch_assoc($res))
              {

                  $or=new Order();
                  $or->setID($row['id']);
                  $or->setTotal($row['total']);
                  $or->setOrderDate($row['date']);
                  $or->setSipping_method($row['shipping_method_id']);
                  $or->setPayment_method($row['payment_type']);
                  $or->setCustomerID($row['customer_id']);
                  $or->setAddressID($row['address_id']);
                  $or->setBook_id($row['book_id']);
                  $or->setQuantity($row['quantity']);
                  $arr[] = $or ;

              }

        $db->CloseConnect();
        return $arr;
     
     
    }

    public function getAllItemsByID($id) {
        $db = new  DBMangement();
        $db->ConnectStart();
        $query = "SELECT * FROM purchase WHERE customer_id= ".$id." ORDER BY id DESC;";
        $res = $db->executequery($query);
        $arr = array() ;

       while ($row=  mysqli_fetch_assoc($res))
              {

                  $or=new Order();
                  $or->setID($row['id']);
                  $or->setTotal($row['total']);
                  $or->setOrderDate($row['date']);
                  $or->setSipping_method($row['shipping_method_id']);
                  $or->setPayment_method($row['payment_type']);
                  $or->setCustomerID($row['customer_id']);
                  $or->setAddressID($row['address_id']);
                  $or->setBook_id($row['book_id']);
                  $or->setQuantity($row['quantity']);
                  $arr[] = $or ;

              }

        $db->CloseConnect();
        return $arr;
    }


}
