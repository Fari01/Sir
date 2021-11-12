
<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<form method="post" action="">
Search Product
<input type="text" name="productid">
<input type="submit" name="search" value="Search">
</form>




</body>
</html>