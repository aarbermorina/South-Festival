<?php
    require_once '../php/navigation.php';
    session_start();
?>
<html lang="en">
<head>
<title>South Festival</title>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,600;1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="../design/Home.css">
</head>
<body onload="load()">
      <section class="header">

        <video autoplay loop class="video-background" muted plays-inline>

            <source src="../img/Video.mp4" type="video/mp4">
        </video>

        <nav>
        <a href="Home.html"> <img src="../img/logo.png" class="logo"></a>

        <div class="nav-links">
            <ul>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Home.php">HOME</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Tickets.php">TICKETS</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="slider.html">LINE-UP</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >ABOUT US</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" >AFTERMOVIE</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="#container">FAQ</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Contact-us.php">CONTACT US</a></li>
                <?php
                    $navLoggedIn = new Navigation();
                ?>
            </ul>

        </div>
        </nav>
       
        <div class="text-box">
            <h1 style="font-family: 'Roboto Condensed', sans-serif;">SEE YOU IN 2022</h1>
            <h3 style="font-family: 'Roboto Condensed', sans-serif;">24/25/26 JUNE</h3>
            <a href="#More" class="button" style="font-family: 'Roboto Condensed', sans-serif;">More Info</a>
        </div>
    </section>

    <div class="shirit">
        <h1 id="More">TICKETS & MORE</h1>
    </div>

<section id="Tickets">
      
    <table border="1">
        <tr>
            <th style="background-color: antiquewhite;">BELIEVERS </br>
                <button class="buton">30$</button></th>
            <th style="background-color: antiquewhite;">EARLY BIRD</br>
                <button class="buton">50$</button></th>
            <th style="background-color: antiquewhite;">REGULAR</br>
                <button class="buton">70$</button></th>
            <th style="background-color: antiquewhite;">VIP</br>
                <button class="buton">100$</button></th>
        </tr>
    
    </table>

</section>
<div class="shirit">
    <h1>PREVIOUS HEADLINERS</h1>
</div>  

<div class="image">
    <img class="image__img" src="../img/Dua Lipa.png" height=530 alt="DUA LIPA">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">DUA LIPA</div>
    </div>
    
</div> 

<div class="image">
    <img class="image__img" src="../img/Martin Garrix.png" height=530 alt="MARTIN GARRIX">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">MARTIN GARRIX</div>
    </div>
    
</div> 

<div class="image">
    <img class="image__img" src="../img/Miley Cyrus.png" height=530 alt="MILEY CYRUS">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">MILEY CYRUS</div>
    </div>
    
</div> 

<div class="image">
    <img class="image__img" src="../img/Calvin Harris.png" height=530 alt="CALVIN HARRIS">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">CALVIN HARRIS</div>
    </div>
    
</div> 

<div class="shirit">
    <abbr style="text-decoration: none; font-weight: bold; font-size:40px;" title="Frequently Asked Questions">FAQ</abbr>
</div>

<section>
    <div id="container">
        <div class="accordion">
            <div class="accordion-item" id="question1">
                <a class="accordion-link" href="#question1">
                    The minimum age to attend?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>THE MINIMUM AGE TO ATTEND THE FESTIVAL ALONE IS 16. 
                        YOUNGSTERS BELOW THE REQUIRED AGE SHOULD BE ACCOMPANIED BY THEIR PARENTS OR ANY OTHER GROWN RELATIVE.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question2">
                <a class="accordion-link" href="#question2">
                    How do I get to the festival?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                   <p> GERMIA NATIONAL PARK IS 20 MINUTES FROM THE CITY CENTER IF YOU DECIDE TO WALK. 
                    YOU CAN ALSO USE THE CITY BUSSES WITH NUMBERS 4 AND 5, AND THAT WILL COST ONLY 0.50 CENTS TO TAKE YOU TO THE LOCATION. 
                    ALSO LOCAL TAXIS WILL COST YOU UP TO 3 EUROS MAX FROM ANY PART OF THE CITY.
                </p>
                </div>
            </div>

            <div class="accordion-item" id="question3">
                <a  class="accordion-link" href="#question3">
                    How many types of tickets are available?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
        
                    <ol>                
                        <li>REGULAR TICKET</li>
                         <li>GROUP OF 3 TICKETS (3 TO 5 PEOPLE)</li>
                         <li>GROUP OF 6 TICKETS (6+ PEOPLE)</li>
                         <li style="list-style-type: disc;">FAMILY TICKET 2 ADULTS + 1 CHILD (5 TO 12 YEARS OLD)</li>
                         <li style="list-style-type: disc;">FAMILY TICKET 2 ADULTS + 2 CHILDREN (5 TO 12 YEARS OLD)</li>
                         <li style="list-style-type: square;">VIP TICKET</li>
                        <p> ALL TICKETS ARE 3-DAY TICKETS. THERE ARE NO 1-DAY TICKETS.</p>
                
                    </ol>
                </div>
            </div>

            <div class="accordion-item" id="question4">
                <a class="accordion-link" href="#question4">
                    Can I work as a volunteer at the festival?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                 <p>
                    YES, YOU CAN WORK AS A VOLUNTEER. 
                    ALL THE INFORMATION WILL BE POSTED IN THE SUNNY HILL FESTIVAL WEBSITE AND FACEBOOK PAGE,
                    SO STAY TUNED TO BE PART OF THE BIGGEST FESTIVAL IN THE REGION.
                 </p>
                </div>
            </div>

            <div class="accordion-item" id="question5">
                <a class="accordion-link" href="#question5">
                    Whats the age limit?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        A PERSON OF 16 YEARS OR OLDER IS CLASSIFIED AS AN ADULT AND IS ELIGIBLE TO ENTER THE VENUE ON THEIR OWN. 
                    CHILDREN AT THE AGE OF 15 AND UNDER MUST BE ACCOMPANIED BY AN ADULT OVER THE AGE OF 18.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question6">
                <a class="accordion-link" href="#question6">
                    Recommended Hotels and Hostels to stay during the festival?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
            <p>
                HERE YOU HAVE A LIST OF HOTELS AND HOSTELS,
                WHERE YOU CAN CONSIDER TO STAY DURING THE DAYS OF THE FESTIVAL AND EVEN MORE IF YOU LIKE TO FURTHER EXPLORE THE CITY OF PRISHTINA:
                <br><br>
                <u><b>HOSTELS:</b></u> <i><a style="color:#fff; text-decoration: none;"href="HTTPS://WWW.BOOKING.COM/HOSTELS/CITY/XK/PRISTINA.HTML">HTTPS://WWW.BOOKING.COM/HOSTELS/CITY/XK/PRISTINA.HTML</a></i>
                <br>
                <u><b>HOTELS:</b></u> <i><a  style="color: #fff;text-decoration: none;"href="HTTPS://WWW.BOOKING.COM/CITY/XK/PRISTINA.HTML">HTTPS://WWW.BOOKING.COM/CITY/XK/PRISTINA.HTML</a></i>
            </div>
            </p>
            </div>
        </div>
    </div>
</section>

<div class="shirit">
    <h1>NEWSLETTER</h1>
</div>
<form class="newsletter">
    <input type="email" id="email" placeholder="Email" required>
    <button type="submit">SUBSCRIBE</button>
</form>

<address style="text-align: center; background-color:grey; padding:20px 0; color:black; 
border-bottom: 1px solid black;  border-top: 1px solid black; font-family: 'Roboto Condensed', sans-serif; ">
    ORGANIZATION NAME: South Festival<br>
    WEB SITE:
    <a style="text-decoration: none; color:black" href="Home.html">South Festival</a><br>
    Veternik, NR.25
    <br>
    PRISHTINË 10000 KOSOVË
</address>

<section class="footer">
    <h4>FIND US AT</h4>
    <div class="icons">

        <a href="https://www.facebook.com" id="facebook" target="_blank">
            <img src="../img/Facebook.png">
        </a>
        <a href="https://www.instagram.com" id="instagram" target="_blank">
            <img src="../img/Instagram.png">
        </a>
        <a href="https://www.twitter.com" id="twitter" target="_blank">
            <img src="../img/Twitter.png">
        </a>
        <a href="https://www.youtube.com" id="youtube" target="_blank">
            <img src="../img/Youtube.png">
        </a>
        <a href="mailto:arbermorina35@gmail.com" target="_blank">
            <img src="../img/Mail.png">
        </a>
    </div>
    <p>© ALL RIGHTS RESERVED</p>

</section>
<script src="../js/Home.js"></script>
</body>
</html>