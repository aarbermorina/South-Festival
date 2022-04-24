<?php
    require_once '../php/Navigation.php';
    require_once '../controllers/MessageController.php';
    require_once '../php/address.php';
    $msg = new MessageController();
    $address = new address();

    if(isset($_POST['msgSend'])){
        
        echo $_POST['fullName'];
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['msg'];
        $msg->send($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../design/Contact-us.css">
    <title>South Festival - Contact us</title>
</head>
<body>
    <div class="header">
        <img src="../img/logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
            <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Home.php">HOME</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Tickets.php">TICKETS</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="slider.html">LINE-UP</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >ABOUT US</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >AFTERMOVIE</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Contact-us.php">CONTACT US</a></li>
                <?php
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="contact-head">
        <div class="contact-main">
            <div class="contact-main-details">
                <h1 id="address">Address and Contact</h1>
                <?php $address->contact(); ?>
            </div>
            <form method="post" class="contact-right">
                <div id="write">
                    <h2>Write us!</h2>
                    <input name="fullName" type="text" placeholder="Name and Surname">
                    <input name="email" type="email" placeholder="E-mail">
                    <input name="title" type="text" placeholder="Title">
                </div>
                <div class="write2">
                    <textarea name="msg" placeholder="Message"></textarea>
                    <input name="msgSend" type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>

    <div class="contact-us">
        <div class="contact-div">
            <div class="contact-details">
                <h1>Contact</h1>
                <?php $address->contact(); ?>
            </div>
            <div class="contact-links">
                <h1>Links</h1>
                <ul>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Home.php">HOME</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="#Tickets">TICKETS</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="slider.html">LINE-UP</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >ABOUT US</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >AFTERMOVIE</a></li>
                </ul>
            </div>
        </div>
</body>
</html>
