<?php
include './DBMangement.php';
include '../NormalClasses/Order.php';

class OrderService {
   public function getOrders(){
       
      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT
                    purchase.id,
                    purchase.total,
                    purchase.date,
                    shipping_method.method_name AS shipping_method_name,
                    payment_method.method_name AS payment_method_name,
                    USER.id AS user_id,
                    address.country,
                    address.city,
                    address.state,
                    address.street_no
                FROM
                    purchase
                JOIN shipping_method ON purchase.shipping_method_id = shipping_method.id
                JOIN payment_method ON purchase.payment_method_id = payment_method.id
                JOIN USER ON purchase.customer_id = USER.id
                JOIN address ON purchase.address_id = address.id
                ";
       $res = $db->executequery($query);
      $arr = array() ;
      
     while ($row=  mysqli_fetch_assoc($res))
            {
         
                $or=new Order();
                $or->setID($arr['id']);
                $or->setTotal($arr['total']);
                $or->setOrderDate($arr['data']);
                $or->setSipping_method($arr['shipping_method_name']);
                $or->setPayment_method($arr['payment_method_name']);
                $or->setCustomerID($arr['user_id']);
                $or->setCountry($arr['country']);
                $or->setCity($arr['city']);
                $or->setState($arr['state']);
                $or->setStreet_no($arr['street_no']);
                $arr[] = $or ;
        
            }
           
      $db->CloseConnect();
      return $arr;
     
   }
   
   
     public function getOrderById($id){
       
      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT
                    purchase.id,
                    purchase.total,
                    purchase.date,
                    shipping_method.method_name AS shipping_method_name,
                    payment_method.method_name AS payment_method_name,
                    USER.id AS user_id,
                    address.country,
                    address.city,
                    address.state,
                    address.street_no
                FROM
                    purchase
                JOIN shipping_method ON purchase.shipping_method_id = shipping_method.id
                JOIN payment_method ON purchase.payment_method_id = payment_method.id
                JOIN USER ON purchase.customer_id = USER.id
                JOIN address ON purchase.address_id = address.id
                WHERE
                    purchase.id = $id";
      $res = $db->executequery($query);
      $arr = array() ;
      
     while ($row=  mysqli_fetch_assoc($res))
            {
         
                $or=new Order();
                $or->setID($arr['id']);
                $or->setTotal($arr['total']);
                $or->setOrderDate($arr['data']);
                $or->setSipping_method($arr['shipping_method_name']);
                $or->setPayment_method($arr['payment_method_name']);
                $or->setCustomerID($arr['user_id']);
                $or->setCountry($arr['country']);
                $or->setCity($arr['city']);
                $or->setState($arr['state']);
                $or->setStreet_no($arr['street_no']);
                $arr[] = $or ;
        
            }
           
      $db->CloseConnect();
      return $arr;
     
   }
   
   
   
   function getOrderForUser(Order $order){
       
       $con =new DBMangement();
       $con->ConnectStart();
       $query = 'SELECT * FROM purchase WHERE customer_id= "'.$order->getCustomerID().'" ';
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
   
   
   function createOrder(Order $order)
   {
       $con =new DBMangement();
       $con->ConnectStart();
       $query = ' INSERT INTO purchase( customer_id, shipping_method_id, payment_method_id, address_id, total, date) VALUES( "'.$order->getCustomerID().'", "'.$order->getSipping_method().'", "'.$order->getPayment_method().'", "'.$order->getAddressId().'", "'.$order->getTotal().'", "'.$order->getOrderDate().'") ';
       $res = $con->executequery($query);
       $con->CloseConnect();
       if($res!=1)
        {
            $this->function_alert("Error");
        }
   }
   
}
