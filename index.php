<?php
include ("functions.php");
 header("Content-Type:application/json");
  if(!empty($_GET['name']))
  {
      $name=$_GET['name'];
      $price=get_price($name);
      if(empty($price))
      {
deliver(200,"book not found ",NULL);
      }else{

        deliver(200,"book found ",$price);
      }
  }else{

    deliver(400,"Invalid Request",NULL);
  }
  function deliver($status,$status_mess,$data)
   {
       header("HTTP/1.1 $status $status_mess ");
       $response['status']=$status;
       $response['status_mess']=$status_mess;
       $response['data']=$data;
       $json_response=json_encode($response);
      echo $json_response; 
       
       
   }

?>