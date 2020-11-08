<?php
/*
 * Action script for the date.html form
 */
?>
<!DOCTYPE HTML5>
<html>
<head>
  <title>
    Date
  </title>
  <style> 
    body {
      font-family: "Georgia"; 
    }
    .response {
      width: 50%;
      height: 40%;
      margin-left: 2%;
      background-color: Cyan;
    }
    #requested_time {
      font-size: 2em;
    }
    #date {
      color: red;
    }
  </style>
</head>
<body >
  <div class="response"> 
  <?php
  require("_date.php"); 

  print_r($_GET);
  $time = (isset($_GET['time'])) ? $_GET['time'] : "now";
  $format = (isset($_GET["format"])) ? $_GET["format"] : "Y-m-d";
  $relative = (isset($_GET["relative"])) ? $_GET['relative'] : "now";

  _date($time,$format,$relative);
  ?>
  </div>
</body>
