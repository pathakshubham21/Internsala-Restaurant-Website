<?php

$name=$_POST['un'];
$pass=$_POST['pw'];

if(isset($_POST['un']))
{
$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
	die("Server could not connected");
$sqldata="select * from login_r where username='".$name."' and password='".$pass."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	if($value["password"]==$pass&&$value['username']==$name)
	{
		echo "<script>alert('You have Sucessfully Login');</script>";
		
		
		
	


	}
	else
	{
		echo "<script>alert('worng username or password');</script>";
		
	}
}
?>

