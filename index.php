


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online managment system</title>
    <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                NICK RESTAURANT
            </h1>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="signup.php">sign up</a></li>
                <li><a href="about.php">About us</a></li>
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
    <form action="" method="post">
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
                    <a href="login.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
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
                    <a href="login.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
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
                    <a href="login.php"><input type="button" value="Buy now" class="btn" name="sub"></a>
                </div>
            </div>
        </div>
        <a href="login.php"><input type="button" value="More menu" id="bt" class="btn" name="sub"></a>
    </section>
    </form>
    <section class="footer">   
            <div class="containing">
                <div>
                <h1>NICK RESTOURANT</h1>
                <p>This is official website of nick restourant</p>
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