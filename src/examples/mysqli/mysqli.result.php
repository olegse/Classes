<?php

require('db.php');

$result = $mysqli->query("SELECT * FROM $table_customers WHERE active = 1 AND expires_in != 'expired' LIMIT 1");
if (!$result) 
  printf("Error on query: %s\n", $mysqli->error);

var_dump(array_keys($result->fetch_assoc()));
while ($row = $result->fetch_assoc()) {
  foreach($row as $key=>$value)
    print("$key $value</br>");
  echo "<hr>";
}
#print_r($result->fetch_field());
#var_dump($result->fetch_assoc());
#print_r($result->fetch_assoc());
