<?php



class DBMangement 
{
    //put your code here
    private $connect;
    function ConnectStart()
    {
        $host="127.0.0.1";
        $user="root";
        $password="";
        $database="book_shop";
        $this->connect =  mysqli_connect($host, $user, $password, $database);
        
        if(mysqli_connect_errno())
        {
            die("Cannot Connect To DataBase:".  mysqli_connect_error());
        } 
        
        
        
        
    }
    function executequery($query)
    {
        $res=  mysqli_query($this->connect, $query);
        return $res;
    }
            
    function CloseConnect()
    {
        mysqli_close($this->connect);
    }
    
   /*
    Example to learn
    * 
    * $query=" SELECT * FROM address ";
        $res=  $this->executequery($query);
        while ($row=  mysqli_fetch_assoc($res))
        {
            $sa=new DBMangement();
            $sa->id=$row['id'];
            $sa->name=$row['country'];
            $this->ar[]=$sa;
        }
        echo $this->ar[1]->name;
         */
}

$ae=new DBMangement();
$ae->ConnectStart();
