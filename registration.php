<?php
session_start();
$con=mysqli_connect('localhost','root','','user');
if($con)
{	echo"connection successfull";}
else
{	echo"no connection";}
mysqli_select_db($con,'user');
$name = $_POST['nick'];
$email = $_POST['email'];
$pass= $_POST['password'];
$no_tank = $_POST['tank_no'];

$q = "select * from user_details where name = '$name' && password = '$pass' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{	echo"duplicate data";}
else
	{$qu="insert into user_details(name,email,password,no_tank) values ('$name','$email','$pass','$no_tank')";}
mysqli_query($con,$qu);
?>