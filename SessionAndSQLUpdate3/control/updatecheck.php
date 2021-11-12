<?php
include('../model/db.php');


 $error="";

 $radio1=$radio2=$radio3=$radioValidation=$dob="";
 $firstname=$email="";
 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);
 
 if ($userQuery->num_rows > 0) {
 
     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
       $firstname=$row["firstname"];
       $email=$row["email"];
       $dob=$row["dob"];
      
       if(  $row["gender"]=="female" )
       { $radio1="checked"; }
       else if($row["gender"]=="male")
       { $radio2="checked"; }
       else if($row["gender"]=="other")
       {$radio3="checked";}
       else
       {
         $radioValidation="Nothing was checked";
       }
    
   } 
 }
   else {
     echo "0 results";
   }
 
 




if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['gender'],$_POST["dob"]);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
