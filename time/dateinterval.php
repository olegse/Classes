<?php
/* DateInterval exploration
 *
 * Ref: https://www.php.net/manual/en/class.dateinterval.php
 */

$now=date_create();
$tomorrow = date_create("tomorrow");
$date_diff= date_diff($now,$tomorrow);
foreach($date_diff as $key=>$value)
  echo "$key => $value</br>";
