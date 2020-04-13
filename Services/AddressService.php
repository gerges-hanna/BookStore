<?php


include_once  '../Services/DBMangement.php';
include_once  '../NormalClasses/Address.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddressService
 *
 * @author Gerges hanna FCI-H
 */
class AddressService {
    //put your code here
    Function CreateAddress(Address $add)
    {
        $connect=new DBMangement();
        $connect->ConnectStart();
        
        $ret="Thers is some Thing Wrong Please Try Agian";
        $this->query='INSERT INTO `address`( `country`, `city`, `address`, `postal_code`, `phone_number`)'
                . ' VALUES ("'.$add->getCountry().'","'.$add->getCity().'","'.$add->getAddress().'","'.$add->getPostal().'","'.$add->getPhone().'")';
        $res=$connect->executequery($this->query);
        $this->query='SELECT LAST_INSERT_ID() as id;';
        $res=$connect->executequery($this->query);
        $array = array();
        $row=NULL;
        while ($row=  mysqli_fetch_assoc($res))
        {
            $id=$row['id'];
        }
        $connect->CloseConnect();
        return $id;
        
    }
    public function getAddressById($id){
       
      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM `address` WHERE id = ".$id;
      $res = $db->executequery($query);
      $arr = array() ;
      
     while ($row=  mysqli_fetch_assoc($res))
            {
         
                $ad=new Address;
                $ad->setAddress_id($row['id']);
                $ad->setAddress($row['address']);
                $ad->setCity($row['city']);
                $ad->setCountry($row['country']);
                $ad->setPhone($row['phone_number']);
                $ad->setPostal($row['postal_code']);
                $arr[] = $ad ;
        
            }
           
      $db->CloseConnect();
      return $arr;
     
   }
}


//$ad=new AddressService();
//print_r($ad->getAddressById(10));
//$as=new AddressService();
//$ad->getCity("sc");
//$ad->getAddress("cac");
//$ad->getCountry("asc");
//$ad->getPhone("056161");
//$ad->getPostal("1656");
//$as->CreateBook($ad);