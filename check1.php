<?php
error_reporting(0);
session_start();
$name=$_POST['un'];
$pass=$_POST['pw'];


$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
	die("Server could not connected");
$sqldata="select * from login_c where username='".$name."' and password='".$pass."'";
$rs=mysqli_query($con,$sqldata);
if($rs==0)
die("not valid");
	$value=mysqli_fetch_assoc($rs);
	if($value["password"]==$pass&&$value['username']==$name)
	{
		$_SESSION['name']=$name;
		$cookie_name = "login";
$cookie_value = "true";
setcookie($cookie_name, $cookie_value); 
		
		  echo "<script> alert('Login Sucessful');
  location.href='menu.php'; </script>";

	}
	else 
	{
	echo "<script> alert('Wrong')</script>";
		
	}

?>

