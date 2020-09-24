<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("create_tables.php",function(data) { 
     $("#div2").html(data);});   
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Database Management</h2></div>

<div id="div2"></div>
<button>Create Tables</button>

</body>
</html>
