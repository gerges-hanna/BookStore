<?php
require_once '../Services/DBMangement.php';
require_once  '../NormalClasses/User.php';
require_once '../Services/CommonFundamentalMethod.php';
class CustomerService implements CommonFundamentalMethod {
  
    function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
    } 
    
//    function getCustomers(User $user){
//
//      $db = new  DBMangement();
//      $db->ConnectStart();
//      $query = ' SELECT *  FROM `user` ';
//      $res = $db->executequery($query);
//      $arr = array() ;
//      
//     while ($row=  mysqli_fetch_assoc($res))
//            {
//         
//                $cu=new User();
//                $cu->setName($row['name']);
//                $cu->setEmail($row['email']);
//                $cu->setPhone($row['phone']);
//                $arr[] = $cu ;
//            }
//           
//      $db->CloseConnect();
//     //return all data of all customers
//   }
   
    
   
   
   
   
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
       $query='INSERT INTO user( name, email, password, phone, user_type, can_read, can_write, can_update, can_delete) VALUES(  "'.$user->getName().'","'.$user->getEmail().'","'.$user->getPassword().'","'.$user->getPhone().'" ,"'.$user->getUserType().'","'.$user->getCan_read().'", "'.$user->getCan_write().'" ,"'.$user->getCan_update().'" ,"'.$user->getCan_delete().'")';
       $res= $con->executequery($query);
       $con->CloseConnect();
       if($res!=1)
        {
            $this->function_alert("There is some thing wrong may be email or name is already exist ");
        }
        return $res;
   }
   function viewBuyer($buyerId){
       $connection = new DBMangement();
       $connection ->ConnectStart();
       $query = "select name , email , phone from user where id = '$buyerId' ";
       $result = $connection->executequery($query);
       $arr = array();
       while ($row=  mysqli_fetch_assoc($result))
            {
                $cu=new User();
                $cu->setName($row['name']);
                $cu->setEmail($row['email']);
                $cu->setPhone($row['phone']);
                $arr[] = $cu ;
            }
        $connection->CloseConnect();
        return $arr;
   }

    public function delete($id) {
        $db = new  DBMangement();
      $db->ConnectStart();
      $query = "DELETE FROM user WHERE id = $id ";
      $res = $db->executequery($query);
      $db->CloseConnect();
      return $res;//this return bool 
    }

    public function getAllItems() {
        $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM user  ";
      $res = $db->executequery($query);
       $arr = array() ;
      
         while ($row=  mysqli_fetch_assoc($res))
            {
         
                $cu=new User();
                $cu->setID($row['id']);
                $cu->setName($row['name']);
                $cu->setEmail($row['email']);
                $cu->setPassword($row['password']);
                $cu->setPhone($row['phone']);
                $cu->setUserType($row['user_type']);
                $cu->setCan_read($row['can_read']);
                $cu->setCan_write($row['can_write']);
                $cu->setCan_update($row['can_update']);
                $cu->setCan_delete($row['can_delete']);
                $arr[] = $cu ;
        
            }
            $db->CloseConnect();
      return $arr;//return data of one customer
    }

    public function getAllItemsByID($id) {
        
      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM user WHERE id = $id ";
      $res = $db->executequery($query);
       $arr = array() ;
      
         while ($row=  mysqli_fetch_assoc($res))
            {
         
                $cu=new User();
                $cu->setID($row['id']);
                $cu->setName($row['name']);
                $cu->setEmail($row['email']);
                $cu->setPassword($row['password']);
                $cu->setPhone($row['phone']);
                $cu->setUserType($row['user_type']);
                $cu->setCan_read($row['can_read']);
                $cu->setCan_write($row['can_write']);
                $cu->setCan_update($row['can_update']);
                $cu->setCan_delete($row['can_delete']);
                $arr[] = $cu ;
        
            }
      $db->CloseConnect();
      return $arr;//return data of one customer
    }

}
