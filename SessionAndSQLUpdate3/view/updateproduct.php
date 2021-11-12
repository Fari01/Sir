<?php
session_start(); 

include('../control/updateproductconrtol.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Update Product</h2>


<form action='' method='post'>
enter product id : <input type='text' name='pid'  >

<input name='search' type='submit' value='Search'>  
</form>

<form action='' method='post'>
<input type='text' name='pname' value="<?php echo $pname; ?>" > <br>
 <input type='text' name='pdesc' value="<?php echo $pdesc; ?>" > <br>
<input type='text' name='pcate'  value="<?php echo $pcate; ?>"> <br>
<input type='text' name='pprice'  value="<?php echo $pprice; ?>"> <br>
<input type='hidden' name='pid'  value="<?php echo $pid; ?>">
<input name='update' type='submit' value='Update'>  
</form>

    
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>