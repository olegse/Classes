<?php

/* Fetch field */

require("db.php");
require("debug.php");

$result = $mysqli->query("SELECT * FROM qrsys_customers LIMIT 10");
_print_assoc($result->fetch_field());

#var_dump($result->fetch_fields());
$fields = $result->fetch_fields();
foreach($fields as $column) {
  #var_dump($column);
  echo $column->name."</br>";
  #echo $column["name"]."</br>";      //  note an array ! !
  echo "</br>OK</br>";
}
