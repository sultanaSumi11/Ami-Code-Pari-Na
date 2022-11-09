



<!DOCTYPE html>
<html>
<head>
	
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sign up</title>
        <link rel="stylesheet" href="CSS/sign.css">

</head>
<body>
<div class="main">

<?php

include("menu.php");

?>
<div class="main-content">
  <div class = "form">
    <form action="action.php" name="f1" method="POST">
        <label for="email" style = "font-weight: bold">Email</label><br>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br><br>
        <label for="username" style = "font-weight: bold">Username</label><br>
        <input type="text" name="uname" class="form-control" placeholder="Enter Username" required><br><br>
        <label for="password" style = "font-weight: bold">Password</label><br>
        <input type="password" class="form-control"  name="password" placeholder="Enter Password" required><br>

        <button type="submit" class="btn">Sign Up</button>
	

    </form>
  </div>
</div>

</body>
</html>


