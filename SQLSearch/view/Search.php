
<!DOCTYPE html>
<html>
<body>

<h2>Search</h2>

<form action="" method="post">
  
   product name  <input type="text" name="pname"  >
  
    <input name="submit" type="submit" value="Search">
</form>
<br>


</body>
</html>
<?php
include('../control/SearchControl.php');

?>
<?php echo $error; ?>