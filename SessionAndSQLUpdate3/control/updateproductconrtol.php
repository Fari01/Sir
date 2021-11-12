<?php

include('../model/db.php');


 $pname=$pdesc=$pcate=$pprice=$pid="";
if(isset($_POST["search"])){

 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->SearchProduct($conobj,"product", $_POST["pid"]);
 
 if ($userQuery->num_rows > 0) {
 
     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
        $pid=$row["P_id"];
       $pname=$row["P_Name"];
       $pdesc=$row["P_Desc"];
       $pcate=$row["P_Category"];
       $pprice=$row["P_Price"];
     
   } 
 }
   else {
     echo "0 results";
   }
}

if(isset($_POST["update"]))
{
    echo $_POST["pname"]."<br>";
    echo $_POST["pcate"]."<br>";
    echo $_POST["pdesc"]."<br>";
    echo $_POST["pprice"]."<br>";
    echo $_POST["pid"]."<br>";
   
    
}



   ?>