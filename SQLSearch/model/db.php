<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function Search($conn,$table,$pname)
 {
$result = $conn->query("SELECT * FROM $table WHERE P_id='$pname' OR P_Name='$pname' OR P_Category='$pname'");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>