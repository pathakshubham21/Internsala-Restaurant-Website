<?php

$un=$_POST["un"];
$name=$_POST["nm"];
$pre=$_POST["pre"];
$pw1=$_POST["pw1"];
$pw2=$_POST["pw2"];


	$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
	die("Server could not connected");
if($pw1==$pw2)
{
$sqldata="insert into login_c values('".$un."','".$pw1."','".$name."','".$pre."')";
$rs=mysqli_query($con,$sqldata);
if($rs!=0)
{
	 echo "<script> alert('Sucessfully Login');
  location.href='menu.php'; </script>";

 
}
}
else
{
echo "<script> alert('Password and Confirme Password not same');</script>";	
}

?>


