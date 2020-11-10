<?php

require('db.php');
$conn = new db();
$user_items = array('money','points','items');
$treasures = $conn->query("
                SELECT money,points,items
                FROM   treasures 
                WHERE  user = 'oleg'");
$treasures = $treasures->fetch_array(MYSQLI_NUM);
#print_r($treasures);
#foreach($treasures as $key=>$value){
  #echo "$key => $value</br>";
#}

$final_countdown = array_combine($user_items,$treasures);
print_r($final_countdown);
