<?php 

include_once  '../Services/DBMangement.php';



        

        $connect=new DBMangement();
        $connect->ConnectStart();
        $query = 'INSERT INTO `test`(`test1`) VALUES (5);';
                
        $res=$connect->executequery($query);
        $query='SELECT LAST_INSERT_ID();';
        $res=$connect->executequery($query);
        $array = array();
        while ($row=  mysqli_fetch_assoc($res))
            {
            print_r($row);
            }
        $connect->CloseConnect();







?>
