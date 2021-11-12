<?php
include('../model/db.php');


 $error="";
// store session data
if (isset($_POST['submit'])) {


$pname=$_POST['pname'];


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"product",$pname);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Product ID</th><th> Product Name</th><th>Product Description</th><th>Price</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["P_id"]."</td><td>".$row["P_Name"]."</td><td>".$row["P_Desc"]."</td><td>".$row["P_Price"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }




$connection->CloseCon($conobj);

}



?>
