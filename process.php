<?php

session_start();
require_once("config.php");

$uname=$_POST['un'];
$pw=$_POST['ps'];
$pw=md5($pw);


$lq="SELECT * FROM `user` WHERE name='$uname' AND pass='$pw'";

$sq=mysqli_query($con,$lq);

$row=mysqli_fetch_array($sq);





if(!empty($row))
{
	

	if($uname==$row[name] && $row[pass]==$pw)
	{
       
       
           $_SESSION=array();

           $_SESSION['un']=$row[name];
            $_SESSION['ps']=$row[pass];

            header("Location:khoj.php");

            



	}
	else
	{
		 header("Location:signin.php?value=fail");
         echo '<script language="javascript">';
		 echo 'alert("Wrong Username And Password")';
		  echo '</script>';
	}


}
else
{
	 header("Location:signin.php?value=fail");
	  echo '<script language="javascript">';
		 echo 'alert("Wrong Username And Password")';
		  echo '</script>';
}



?>