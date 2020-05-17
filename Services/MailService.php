<?php
class EmailSender{

public Function send_email($from,$subject ,$message)
{
    $header = "From:".$from;
    $to="gogohanna100@gmail.com";
  $isMailSent =  mail($to ,$subject,$message,$header);
  if($isMailSent)
  {
      echo "email sent successfuly";
  }
  return $isMailSent;
} 
}

