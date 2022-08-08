<?php
require("connection.php");
if(isset($_POST["serve"]))
{
    $username = $_POST["user"];
    $quantity = $_POST["qty"];
    $query ="INSERT INTO ordert (quantity) VALUES ('$quantity')";
    $query1= "SELECT * FROM customer WHERE username='$username'";
    $call = mysqli_query($con, $query);
    $call1 = mysqli_query($con, $query1);
    $count = mysqli_num_rows($call1);
    $row = mysqli_fetch_assoc($call1);
    if($count==1)
    {
      $call = mysqli_query($con, $query);
      $_SESSION['loginMessage'] = '<span class="success"> Thanks for ordering </span>';
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/order.css">
    <title>orderform</title>
</head>
<body>
    <h1>Place Your Order Here</h1>
<section class="section">
    <form action="" method="post">
        <label for="name" > username: </label>
        <input type="text" name="user" id="name"><br>
        <label for="name" > quantity: </label>
        <input type="number" name="qty" id="number"><br>
        <label for="mode">Mode of payment</label><br>
        <select name="select" id="select">
        <option value="Mtn">MTN mobile Money</option>
        <option value="aitel">AIRTEL Money</option>
        <option value="Mtn">PayPal</option>
        </select>
        <input type="button" class="btn" value="save" name="serve">
    </form>
    <div class="details">
    <h3>Dish name</h3>
    <h3>THE MENU IS PLENTIFUL</h3>
    <P>this is delicious food</P>
    <p>1000 Frw</p>
    </div>
    </section>
</body>
</html>