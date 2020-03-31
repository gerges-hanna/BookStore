<?php
include 'DBMangement.php';
include '../NormalClasses/Customer.php';
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
   
   function updateCustomer(Customer $customer){
       $uc= new DBMangement();
       $uc->ConnectStart();
       $query='UPDATE `customer` SET `phone`= "'.$customer->getPhone().'" WHERE `person_id`= "'.$customer->getID().'" ';
       $res= $uc->executequery($query);
       $uc->CloseConnect();
       if($res!=1)
        {
            $this->function_alert("Error");
        }
   }
   
   
    function createCustomer(Customer $customer)
   {
       $uc= new DBMangement();
       $uc->ConnectStart();
       $query= 'INSERT INTO customer(person_id, phone) VALUES ('.$customer->getID().','.$customer->getPhone().')';
       $res= $uc->executequery($query);
       $uc->CloseConnect();
       if($res!=1)
        {
            $this->function_alert("Error");
        }

   }
}
