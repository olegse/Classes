<?php

/* DateTime object exploration 
 *y
 * date_create([string $time = "now" [, DateTimeZone $timezone = NULL ]] );
 *
 * Returns new DateTime object
 *
 * Implement the same with show_user_info.php and rename show_info_in_table.php
  */
$DateTime1 = date_create("2000-01-01");
foreach($DateTime1 as $key=>$value) {
  echo "<p>$key    <-> $value</p>";
}

$date->add(new sdf
