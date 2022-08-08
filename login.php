<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>LOG IN</title>
   <link rel="stylesheet" href="css/logi form.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
   <nav>
      <div class="logo">NICK RESTOURANT</div>
      <ul>
         <li><a href="index.php">Home</li></a>
      </ul>
   </nav>
<form action="loginprocess.php" method="post">
   <div class="login-box">
      <h1>log in</h1>
      <div class="textbox">
         <i class="fa-solid fa-user" aria-hidden="true"></i>
         <input type="text" placeholder="username" name="user" id="user" required>
      </div>
      <div class="textbox">
         <i class="fa-solid fa-lock" aria-hidden="true"></i>
         <input type="password" placeholder="Password" name="passw" id="pass" required>
      </div>
      <input class="btn" type="submit" value="sign in" name="subb">
      <div>
         <p>If you are new here register here <span><a href="signup.php">Sign up</a></span></p>
      </div>
   </div>
   </form>
   <script src="js/index.js"></script>
</body>
</html>