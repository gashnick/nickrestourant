<?php
extract($_POST);
include("connection.php");
if(isset($_POST["sign"]))
{
    $firstName = $_REQUEST["first"];
    $lastName = $_REQUEST["last"];
    $password = $_REQUEST["pass"];
    $email = $_REQUEST["email"];
    $contact = $_REQUEST["contac"];
    $username = $_REQUEST["user"];
    $address = $_REQUEST["addr"];
    $sql = mysqli_query($con, "SELECT * FROM customer WHERE username='$username' AND email='$email'");
   if(mysqli_num_rows($sql)>0)
   {
     echo "user already exists";
   }
    $numrows = mysqli_num_rows($sql);
    if($numrows==0)
    {
      $query = "INSERT INTO customer (first_name, last_name,username,contact,adderess, password, email)  VALUES ('$firstName', '$lastName','$username','$contact','$address','$password','$email')";

      $call = mysqli_query($con, $query);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>signup</title>
  <link rel="stylesheet" href="css/sign_up.css">
</head>
<body>
  <nav>
    <div class="logo">NICK RESTOURANT</div>
    <ul>
      <li><a href="index.php">Home</a></li>
    </ul>
  </nav><br>
  <h1>sign up</h1>
  <form action="signup.php" method="post">
  <section>
    <div class="form1">
      <label for="firstname" class="design">First name</lebel>
      <input type="text" name="first" id="" required><br>
      <label for="lastname" class="design">Last name</lebel>
      <input type="text" name="last" id="" required><br>
      <label for="email" class="design">Email</lebel><br>
      <input type="text" name="email" id="" required><br>
      <label for="contact" class="design">Contact</lebel><br>
      <input type="number" name="contac" id="" required>
    </div>
    <div class="form2">
    <label for="address"class="design">Address</lebel><br>
      <input type="text" name="addr" id="" required><br>
      <label for="username"class="design">Username</lebel><br>
      <input type="text" name="user" id="" required><br>
      <label for="password" class="design">Password</lebel><br>
      <input type="password" name="pass" id="" required>
    </div>
    <input type="submit" value="Sign up" name="sign"><br>
      <h3>Alread have an account<span><a href="login.php">login</a></span></h3>
  </section>
  </form> 
</body>
</html>