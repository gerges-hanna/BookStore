<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 *
 * @author Gerges hanna FCI-H
 */
require_once '../Services/DBMangement.php';
require_once '../NormalClasses/Category.php';
class CategoryController {
    //put your code here
   function  getCategorey()
    {
        $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM category";
      $res = $db->executequery($query);
      $arr = array() ;
      
      while ($row=  mysqli_fetch_assoc($res))
        {
            $toArr=new Category();
            $toArr->setId($row['id']);
            $toArr->setName($row['category_name']);
            $arr[]=$toArr;
        }
           
      $db->CloseConnect();
      return $arr;
    }
    Function ShowCategory()
    {
        $t=new CategoryController();
        $arr=$t->getCategorey();
        for($i=0;$i<count($arr);$i++)
        {
            $img=$i+1;
             echo '<a href="Category1.php?cat='.$arr[$i]->getName().'" > '
            . '<img title="Gainers" src="img/C'.$img.'.png" style="width:200px;'
                     . 'height:250px" class="zoom">'.$arr[$i]->getName().'</a>';
        }
    }
}


