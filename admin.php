<?php
require("connection.php");
function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $username = test_input($_POST["user"]);
    $password = test_input($_POST["passw"]);
    $query = "SELECT * FROM manager WHERE names='$username' AND password = 'password'";
    $call = mysqli_query($con, $query);
    
    $count = mysqli_num_rows($call);

    $row = mysqli_fetch_assoc($call);

    if($count==1)
    {
      $_SESSION['loginMessage'] = '<span class="success"> Welcome '. $username.'</span>';
      header('location: index.php');
      exit();
    }else
    {
      $_SESSION['noUser'] = '<span class="fail">'. $username.'Is not registered'.'</span>';
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</body>
</html>