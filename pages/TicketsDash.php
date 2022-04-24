<?php
    session_start();
    require_once '../controllers/TicketsController.php';
    require_once '../controllers/ActivityController.php';
    $tickets = new TicketsController();
    $activity = new ActivityController();

    if(isset($_POST['insert'])){
        $activity->ticketAdd($_SESSION['name'],$_SESSION['lastName'], $_POST);
        $tickets->addTicket($_POST);
        
    }
    if(isset($_GET['delete'])){
        $activity->ticketRemove($_SESSION['name'],$_SESSION['lastName'], $_GET);
        $tickets->removeTicket($_GET);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../design/TicketsDash.css">
    <title>Tickets</title>
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
                    require_once '../php/Navigation.php';
                    $navLoggedIn = new Navigation();
                ?>
            </ul>
        </div>
    </div>

    <div class="contents">
        <ul class="dashboard-nav">
            <li><a href="Admin.php">Admin</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="TicketsDash.php" id="dash-nav">Tickets</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="insertBtn">Add</button></li>
                <li><button id="deleteBtn">Remove</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th class="thID">Id</th>
                        <th class="thType">Type</th>
                        <th class="thPrice">Price</th>
                        <th class="thValidity">Validity (Days)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $data = $tickets->readData();
                        foreach($data as $tickets): ?>
                        <tr>
                            <td><?php echo $tickets['ticket_id']; ?></td>
                            <td><?php echo $tickets['type']; ?></td>
                            <td><?php echo $tickets['price'].' $'; ?></td>
                            <td><?php echo $tickets['validity'].'days'; ?></td>
                        </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </form>
    </div>

    
    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Add Ticket:</p>
            <div>
                <p>Ticket type:</p>
                <input class="userInputs" type="text" name="type">
                <p>Price:</p>
                <input class="userInputs" type="number" name="price">
                <p>Validity (Days):</p>
                <input class="userInputs" type="number" name="validity">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Remove ticket:</p>
            <div>
                <p>Ticket id:</p>
                <input class="deleteId" type="number" name="deleteId">
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Admin.js"></script>
</body>
</html>