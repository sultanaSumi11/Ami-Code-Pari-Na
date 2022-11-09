<?php

session_start();

if(isset($_SESSION["un"]))
{
  header("Location:khoj.php");
}

?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sign in</title>
        <link rel="stylesheet" href="CSS/sign.css">
</head>
<body>
<div class="main">

<?php

      include("menu.php");

?>
<div class="main-content">
  <div class = "form">
    <form action="process.php" name="f1" method="POST">
        <label for="username" style = "font-weight: bold">Username</label><br>
        <input type="text" name="un" class="form-control" placeholder="Enter Username" required><br>
        <br><label for="password" style = "font-weight: bold;">Password</label><br>
        <input type="password" class="form-control"  name="ps" placeholder="Enter Password" required><br>

        <button type="submit" class="btn">Sign In</button>
	

    </form>
  </div>
  
</div>
</div>

</body>
</html>


