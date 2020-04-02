<?php
include 'DBmanagement.php';
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
}
