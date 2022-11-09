<?php

require_once("config.php");

$user=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);

$query="INSERT into user(name,pass,email) VALUES('$user','$password','$email')";
$sq=mysqli_query($con,$query);



if($sq)
{
	header("Location:signin.php");
}
else
{
	echo("Failed");
}






?>