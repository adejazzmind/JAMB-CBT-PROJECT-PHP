<?php
include("jambcbt.php");
error_reporting(0);
?>
<?php
$Firstname=$_POST["firstName"];
$Lastname=$_POST["lastName"];
$Username=$_POST["username"];
$Password=$_POST["password"];
$Verifypassword=$_POST["verifyPassword"];
$query="insert into jamb values('$Firstname','$Lastname','$Username','$Password','$Verifypassword')";
$data=mysqli_query($conn,$query);
if($data)
{echo "Data submitted Successfully,";}
else {echo "Data Not Submitted";}
?>