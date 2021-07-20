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
  <div class ="box" style="margin:25%; margin-top:5%; border-radius:5px; background-color:#F1F1F1;">
    <div class ="subheader">
      <h1>Sign up</h1>
    </div>
    <form method="post" action="sign up page.php"> 
    <h5>Username</h5>
    <input type="text" name="username">
    <br>
    <h5>Email</h5>
    <input type="email" name="email">
    <br>
    <h5>Password</h5>
    <input type="password" name="password_1">
    <br>
    <h5>Confirm Password</h5>
    <input type="password" name="password_2">
    <br>
    <div class = "matchtick"></div>
    <button class = "login">login</button>
    <button type="submit" class = "signupbutton" name ="reg_user">sign up</button>
    </form>
  </div>
  
</body>
</html>