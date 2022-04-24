<?php
    require_once '../php/Address.php';
    $address = new address();
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>South Festival - Sign in</title>
    <link rel="stylesheet" href="../design/Sign-in.css">
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
    <form method="post" id="formSignIn">
        <div class="sign-in-container">
            <div class="sign-in">
                <h1>Sign in</h1>
                <h5>Join the fun!</h5>
                <input name="email" id="SIemail" class="texts" type="email" placeholder="E-mail">
                <label id="labelSIEmail"></label>
                <input name="password" id="SIpassword" class="texts" type="password" placeholder="Password">
                <label id="labelSIPassword"></label>
                <div class="remember-me">
                    <div class="check">
                        <input type="checkbox"><p>Remember me</p>
                    </div>
                    <a href="" onclick="heh()">Forgot your password?</a>
                </div>
                <script src="../js/Sign-in.js"></script>
                <input type="button" value="Login" class="login" onclick="signIn()">
                <a href="Sign-up.php#sign-up-container" id="sign-up">Don't have an account? Sign up!</a>
            </div>
        </div>
    </form>
<?php
    if(!empty($_POST)){
        require_once '../php/Sign-In.php';
        $signIn = new SignIn();
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
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="#Tickets">TICKETS</a></li>
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
    <script src="../js/Sign-in.js"></script>
</body>
</html>