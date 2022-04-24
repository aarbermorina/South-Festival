<?php
    require_once '../php/Address.php';
    $address = new address();
    ?>
<html>
<head>
    <title>South Festival - Sign up</title>
    <link rel="stylesheet" href="../design/Sign-up.css">
</head>
<body>
    <div class="header">
        <img src="../img/logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
            <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Home.php">HOME</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Tickets.php">TICKETS</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="slider.html">LINE-UP</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="#container">FAQ</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Contact-us.php">CONTACT US</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Sign-in.php">SIGN IN</a></li>
            </ul>
        </div>
    </div>
    <form method="post" id="form" name="form">
        <div class="sign-up-container" id="sign-up-container">
            <div class="sign-up">
                <h1>Sign up</h1>
                <h5>Sign up and reach above limits!</h5>
                <input name="name" id="sName" class="texts" type="text" placeholder="Name">
                <label id="labelName"></label>
                <input name="lastName" id="sLName" class="texts" type="text" placeholder="Last name">
                <label id="labelLName"></label>
                <input name="email" id="sEmail" class="texts" type="email" placeholder="E-mail">
                <label id="labelEmail"></label>
                <input name="password" id="sPassword" class="texts" id="pass" type="password" placeholder="Password">
                <label id="labelPassword"></label>
                <input name="cpass" id="sCPassword" class="texts" id="confirm" type="password" placeholder="Confirm password">
                <label id="labelCPassword"></label>
                <div class="check">
                    <input type="checkbox"><p>I accept the <span><a>Terms and Conditions</a></span></p>
                </div>

                <script src="../js/Sign-in.js"></script>
                <input name="btnSubmit" type="button" value="Login" class="login" onclick="signUp()">
                <a href="Sign-in.php" id="sign-in">Already have an account? Sign in!</a>
            </div>
        </div>
    </form>

    <?php
        if(!empty($_POST)){
            require_once '../php/loginValidation.php';
            $validate = new LoginValidate();
        }
    ?>
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
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Tickets.php">TICKETS</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="slider.html">LINE-UP</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >ABOUT US</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >AFTERMOVIE</a></li>
                </ul>
            </div>
            <div class="contact-socials">
                <ul>
                <li><a id="fb" href="https://facebook.com"><img id="fb" src="../img/Facebook.png" alt="Facebook"></a></li>
                    <li><a id="twitter" href="https://twitter.com"><img src="../img/Twitter.png" alt="Twitter"></a></li>
                    <li><a id="insta" href="https://instagram.com"><img src="../img/Instagram.png" alt="Instagram"></a></li>
                    <li><a id="yt" href="https://youtube.com"><img src="../img/Youtube.png" alt="Youtube"></a></li>
                </ul>
            </div>
        </div>

        <div class="line">

    
</body>
</html>