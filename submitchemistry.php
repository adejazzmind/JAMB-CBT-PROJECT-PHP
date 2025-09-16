<?php
include("jambcbt.php");
error_reporting(0);
?>
<?php
$studentname=$_POST["studentname"];
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$query="insert into chemistry values('$studentname','$q1','$q2','$q3','$q4','$q5')";
$data=mysqli_query($conn,$query);
if($data)
{echo "Data submitted Successfully,";}
else {echo "Data Not Submitted";}
?>