<?php
include 'DBMangement.php';
class CustomerService {
  
    public function getCustomers(){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM customer";
      $res = $db->executequery($query);
      $arr = array() ;
      
      while ($row=  mysqli_fetch_assoc($res))
            {
         
                $cu=new Customer();
                $cu->id=$row['person_id'];
                $cu->phonr=$row['phone'];
                $arr[] = $cu ;
        
            }
           
      $db->CloseConnect();
      return $arr;//return all data of all customers
   }
   
    public function getCustomer($id){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM customer WHERE id = $id ";
      $res = $db->executequery($query);
      $db->CloseConnect();
      return $res;//return data of one customer  
   }
   
    public function deletCustomer($id){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "DELETE FROM customer WHERE id = $id ";
      $res = $db->executequery($query);
      $db->CloseConnect();
      return $res;//this return bool 
   }
   
   
}
