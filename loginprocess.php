<?php
session_start();
if(isset($_POST["subb"])){
    extract($_POST);
    include 'connection.php';
    $username = $_POST["user"];
    $password = $_POST["passw"];
    $query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";

    $call = mysqli_query($con, $query);

    $row = mysqli_fetch_array($call);

    if(is_array($row))
    {
      //$_SESSION['loginMessage'] = '<span class="success"> Welcome '. $username.'</span>';
      $_SESSION["username"] = $row['username'];
      $_SESSION["password"] = $row['password'];
      header('location: landingpage.php');
      exit();
    }else
    {
      echo "Invalid username or password";
    }
}
?>