<?php
include 'DBMangement.php';
include 'NormalClasses/User.php';
class CustomerService {
  
    public function getCustomers(){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM user";
      $res = $db->executequery($query);
      $arr = array() ;
      
      while ($row=  mysqli_fetch_assoc($res))
            {
         
                $cu=new User();
                $cu->id=$row['id'];
                $cu->name=$row['name'];
                $cu->email=$row['email'];
                $cu->password=$row['password'];
                $cu->phonr=$row['phone'];
                $cu->user_type=$row['user_type'];
                $cu->can_read=$row['can_read'];
                $cu->can_write=$row['can_write'];
                $cu->can_update=$row['can_update'];
                $cu->can_delet=$row['can_delet'];
                $arr[] = $cu ;
        
            }
           
      $db->CloseConnect();
      return $arr;//return all data of all customers
   }
   
    public function getCustomerById($id){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM user WHERE id = $id ";
      $res = $db->executequery($query);
       $arr = array() ;
      
         while ($row=  mysqli_fetch_assoc($res))
            {
         
                $cu=new User();
                $cu->id=$row['id'];
                $cu->name=$row['name'];
                $cu->email=$row['email'];
                $cu->password=$row['password'];
                $cu->phonr=$row['phone'];
                $cu->user_type=$row['user_type'];
                $cu->can_read=$row['can_read'];
                $cu->can_write=$row['can_write'];
                $cu->can_update=$row['can_update'];
                $cu->can_delet=$row['can_delet'];
                $arr[] = $cu ;
        
            }
      
      $db->CloseConnect();
      return $arr;//return data of one customer  
   }
   
    public function deletCustomer($id){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "DELETE FROM user WHERE id = $id ";
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
