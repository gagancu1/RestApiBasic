<?php
function get_price($find)
{
    $books=array(
  "java"=>299,
  "c"=>344,
  "php"=>267,
  

    );

    foreach($books as $books=>$price)
    {
        if($books==$find)
        {
            return $price ; 
            break; 
        }
    }
}


?>