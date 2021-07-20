<?php include("A_server.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
  <div class ="header">
    <h1>The Adventures of You</h1>
  </div>
  
  <div class ="box" style="margin:25%; margin-top:5%;border-radius:5px; background-color:#F1F1F1;">
    <div class ="subheader">
      <h1>Login</h1>
    </div>

    <form method="post" action="login page.php">
    <?php include("errors.php");?>
    <h5>Username</h5>
    <input type="text" name="username">
    <br>
    <h5>Password</h5>
    <input type="password" name="password">
    <br>
    <button class ="signup">sign up</button>
    <button type="submit" class = "loginbutton" name="login_user">log in</button>
    </form>
  </div>
  
</body>
</html>