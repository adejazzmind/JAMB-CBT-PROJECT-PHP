<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jambcbt";
$conn=mysqli_connect($servername, $Username, $Password, $dbname);
if($conn){
echo "Connection Successful!";
}
else{
echo "Connection Failed!";
}
?>