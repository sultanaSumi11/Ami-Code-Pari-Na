<?php
$u = 0;
if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
  $u=1;

}
?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="CSS/menu.css">
  
</head>
<body>


  <div class="menurow">
  <div class = "logo">
     <h2 style="color:#c5c6d1; margin:0"><span style="color:#020338;">A</span>mi<span style="color:#FFFFF7; ">C</span><span style="">ode</span>Parina<span style="font-style: oblique;"></span></h3> </center> 
  </div>
      <center><ul>
         <?php
            if($u==1)
            {
               echo "<li class=\"space2\"><a href=\"logout.php\">Log Out</a>";
            }
            else
            {
               echo "<li class=\"space2\"><a href=\"signin.php\">Sign In</a>";
               echo "<li class=\"space2\"><a href=\"signup.php\">Sign Up</a>";
            }
         ?>
      </ul></center>
  </div>
  
</body>
</html>

