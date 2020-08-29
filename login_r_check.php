<?php
session_start();
$name=$_POST['un'];
$pass=$_POST['pw'];

if(isset($_POST['un'],$_POST['submit'],$_POST['pw']))
{
$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
	die("Server could not connected");
$sqldata="select * from login_r where username='".$name."' and password='".$pass."'";
$rs=mysqli_query($con,$sqldata);
	$value=mysqli_fetch_assoc($rs);
	if($value["password"]==$pass&&$value['username']==$name)
	{
		$_SESSION['un']=$name;
		 echo "<script> alert('Login Sucessful');
  location.href='data_r.php'; </script>";
		
	


	}
	else
	{
		echo "<script>alert('worng username or password');</script>";
		
	}
}
?>

