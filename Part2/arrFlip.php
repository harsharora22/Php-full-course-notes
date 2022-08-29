<?php  
$marks = array(
     "Name"=>"Harsh",
     "Science"=>98,
     "SST"=>96,
     "Computer"=>99
    );
  //  $newArr=array_flip($marks);
   $newArr=array_change_key_case($marks,CASE_UPPER);
   echo "<pre>";
   print_r($newArr);
   echo "</pre>";
?>