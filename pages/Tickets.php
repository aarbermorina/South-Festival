<?php
    require_once '../php/Navigation.php';
    require_once '../controllers/TicketsController.php';
    require_once '../php/address.php';
    
    $tickets = new TicketsController();
    $data = $tickets->readData();
    $address = new address();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../design/Tickets.css">
    <title>South Festival - Tickets</title>
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

    <div class="tickets-head">
        <table class="table">
            <thead>
                <th></th>
                <th class="theader">Tickets</th>
            </thead>
            <tbody class="tbody">
                <tr>
                    <?php
                        $count = 1;
                        foreach($data as $tickets){
                            echo '
                                <td>
                                    <div class="container" id="'.$tickets['type'].'">
                                        <h1>';
                                        if($tickets['type'] == 'believer'){
                                            echo 'Believer';
                                        }elseif($tickets['type'] == 'earlybird'){
                                            echo 'Earlybird';
                                        }elseif($tickets['type'] == 'regular'){
                                            echo 'Regular';
                                         } else{
                                            echo 'Confirmed';
                                        }
                                        echo '</h1>
                                        <div>
                                            <div>
                                                <p>'.$tickets['validity'].' Days</p>
                                                <p class="price">Price: '.$tickets['price'].' $</p>
                                                <a href="Purchase.php?id='.$tickets['ticket_id'].'&type='.$tickets['type'].'&price='.$tickets['price'].'&validity='.$tickets['validity'].'">Purchase</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                ';
                                if($count % 3 == 0 && $count != 0){
                                    echo '</tr><td><div class="space"></div></td><tr>';
                                }
                                $count++;
                        }
                    ?>
                </tr>
                <td><div class="space"></div></td>
            </tbody>
        </table>
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
            <div class="contact-socials">
                <ul>
                <li><a id="fb" href="https://facebook.com"><img id="fb" src="../img/Facebook.png" alt="Facebook"></a></li>
                    <li><a id="twitter" href="https://twitter.com"><img src="../img/Twitter.png" alt="Twitter"></a></li>
                    <li><a id="insta" href="https://instagram.com"><img src="../img/Instagram.png" alt="Instagram"></a></li>
                    <li><a id="yt" href="https://youtube.com"><img src="../img/Youtube.png" alt="Youtube"></a></li>
                </ul>
            </div>
        </div>
</body>
</html>
