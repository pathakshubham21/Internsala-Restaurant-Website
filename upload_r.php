<?php

$rname=$_POST["rname"];
$pre=$_POST["type"];
$name=$_POST["nm"];
$img=$_POST["img"];
echo $name.$pre.$rname.$img;

$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
	die("Server could not connected");
$sqldata="insert into menu values('".$name."','".$img."','".$rname."','".$name."','".$pre."')";
$rs=mysqli_query($con,$sqldata);
if($rs!=0)
{
 echo "<script> alert('Item Added in Menu');
  location.href='data_r.php'; </script>";
}
else
echo "<script> alert('Something went wrong try again');</script>";

?>


