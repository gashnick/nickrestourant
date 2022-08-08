<?php
session_start();
include 'connection.php';
$username = $_SESSION["username"];
$sql = mysqli_query($con, "SELECT * FROM customer WHERE username = '$username'");
$row = mysqli_fetch_array($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online managment system</title>
    <link rel="stylesheet" href="css/landing.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                NICK RESTAURANT
            </h1>
            <ul>
                <li><a href="landingpage.php">home</a></li>
                <li><a href="order-food.php">Order Now</a></li>
                <li><a href="index.php">Log out</a></li>
            </ul>
        </div>
    </header>
    <section  id="home" class="section-content">
        <div class="intro-section">
            <h1 class="heading1">
                WELCOME TO <br>
                NICK RESTAURANT
            </h1>
            <p>
                We Provide delicious and enjoyable food
            </p>
            <h4 class="heading1">
                Our mission is:
            </h4>
            <p>
                To create an environment where absolute guest satisfaction is our highest prioty
            </p>
        </div>
    </section>
    <form action="landingpage.php" method="post">
    <section class="welcome">
        <h1 class="heading"> FOOD GALLERY</h1>
        <center><h3 class="sub-heading">~ Best quality food ~</h3></center>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/image1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>DELICIOUS FOOD</h3>
                    <P>this is delicious food</P>
                    <p>500 Frw</p>
                    <a href="order-food.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
 
            <div class="box">
                <div class="image">
                    <img src="images/image2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>FRESH FOOD</h3>
                    <P>this is delicious food</P>
                    <p>700 Frw</p>
                    <a href="order-food.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/image3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>THE MENU IS PLENTIFUL</h3>
                    <P>this is delicious food</P>
                    <p>1000 Frw</p>
                    <a href="order-food.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
        </div>
        <div class="box-container" id="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/chicken2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>DELICIOUS FOOD</h3>
                    <P>this is delicious food</P>
                    <p>5000 Frw</p>
                    <a href="order-food.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
 
            <div class="box">
                <div class="image">
                    <img src="images/sandwitch.jpg" alt="">
                </div>
                <div class="content">
                    <h3>FRESH SANDWITCH</h3>
                    <P>this is delicious meal</P>
                    <p>700 Frw</p>
                    <a href="order-food.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/real spanish omollete.jpg" alt="">
                </div>
                <div class="content">
                    <h3>THE MENU IS PLENTIFUL</h3>
                    <P>this is delicious food</P>
                    <p>1000 Frw</p>
                    <a href="order-food.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
        </div>
    </section>
    </form>
    <section class="menu" id="menu">
            <h1 class="heading">
                Our menu
            </h1>
            <center><h3 class="sub-heading">~ see what we offer ~</h3></center>
        </div>
        <div class="menu-container">
            <div class="item">
                <div class="item-name">
                    <h2>Main menu</h2>
                    <img src="images/2.jpeg" alt="">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super Delicious</h3>
                        <span class="dots"></span>
                        <h3>$15</h3>

                        <ul>
                            <li><a href="#">chicken</a></li>
                            <li><a href="#">Sousage</a></li>
                            <li><a href="#">vegeterian</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Super Delicious</h3>
                        <span class="dots"></span>
                        <h3>$20</h3>

                        <ul>
                            <li><a href="#">Habagger</a></li>
                            <li><a href="#">Sousage</a></li>
                            <li><a href="#">vegeterian</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-name">
                    <h2>Drinks</h2>
                    <img src="images/2.jpg" alt="">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super Delicious</h3>
                        <span class="dots"></span>
                        <h3>$15</h3>

                        <ul>
                            <li><a href="#">chicken</a></li>
                            <li><a href="#">Sousage</a></li>
                            <li><a href="#">vegeterian</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Super Delicious</h3>
                        <span class="dots"></span>
                        <h3>$20</h3>

                        <ul>
                            <li><a href="#">Habagger</a></li>
                            <li><a href="#">Sousage</a></li>
                            <li><a href="#">vegeterian</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           </div>
    </section>

    <section class="footer">   
            <div class="containing">
                <div>
                <h1>NICK RESTOURANT</h1>
            </div>
            <div>
                <h3>GET NEWS AND OFFERS</h3>
                <input type="email" name="" placeholder="enter your email">
                <button class="btn"> Subscribe</button>
                <ul>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div>
            <h3>CONTACT US</h3>
            <span>NICK RESTAURANT</span>
            <span>+ (250) 78553467</span>
            <span>nickrestourant@gmail.com</span>
        </div>
        </div>
        <p>&copy; 2022 Resrved by nick restaurant</p>
    </section>
</body>
</html>