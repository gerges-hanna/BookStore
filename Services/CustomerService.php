<?php
include './DBMangement.php';
include '../NormalClasses/User.php';
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
   
   
   
   
   function updateCustomer(User $user){
       $con= new DBMangement();
       $con->ConnectStart();
       $query='UPDATE user SET name= "'.$user->getName().'" ,email= "'.$user->getEmail().'" ,password= "'.$user->getPassword().'" ,phone= "'.$user->getPhone().'" ,user_type= "'.$user->getUserType().'" ,can_read= "'.$user->getCan_read().'" ,can_write= "'.$user->getCan_write().'" ,can_update= "'.$user->getCan_update().'" ,can_delete= "'.$user->getCan_delete().'" where id= "'.$user->getID().'" ';
       $res= $con->executequery($query);
       $con->CloseConnect();
       if($res!=1)
        {
            $this->function_alert("Error");
        }
   }
   
    function createCustomer(User $user)
   {
       $con= new DBMangement();
       $con->ConnectStart();
       $query='INSERT INTO user(id, name, email, password, phone, user_type, can_read, can_write, can_update, can_delete) VALUES( "'.$user->getID().'", "'.$user->getName().'","'.$user->getEmail().'","'.$user->getPassword().'","'.$user->getPhone().'" ,"'.$user->getUserType().'","'.$user->getCan_read().'", "'.$user->getCan_write().'" ,"'.$user->getCan_update().'" ,"'.$user->getCan_delete().'")';
       $res= $con->executequery($query);
       $con->CloseConnect();
       if($res!=1)
        {
            $this->function_alert("Error");
        }
   }
}

