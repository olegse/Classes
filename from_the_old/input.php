<?php
session_start();

require("secret.php");

$_SESSION['ratio'] = _RATIO;

?>

<html>
<head>

<script>
function showHint() {
  var amount = document.getElementById("money").value;
  var ratio  = document.getElementById("ratio").value;

  if (amount.length == 0) {
    document.getElementById("points").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("points").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "convert.php?ratio="  + ratio
                                 + "&amount=" + amount,
                                                true);
    xmlhttp.send();
  }
}
</script>
    
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="money">Money:</label>
  <input type="text" id="money" name="money" value="0" onkeyup="showHint()">
  <label for="points">Points:</label>
  <span id="points"> </span> 
  </br>
  <label for="ratio">Ratio:</label>
  <input type="text" id="ratio" name="ratio" value="<?php echo $_SESSION['ratio']; ?>" onkeyup="showHint()">
</form>

</body>
</html> 
