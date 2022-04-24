<?php
require_once '../php/navigation.php';
require_once '../controllers/MessageController.php';
require_once '../controllers/ActivityController.php';

$activity = new ActivityController();
$msg = new MessageController();

if(isset($_GET['delete'])){
    $activity->contactRemove($_SESSION['name'],$_SESSION['lastName'],$_GET);
    $msg->delete($_GET);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../design/Contact.css">
    <title>Contact</title>
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

    <div class="contents">
        <ul class="dashboard-nav">
            <li><a href="Admin.php">Admin</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Contact.php" id="dash-nav">Contact</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="MembershipDash.php">Tickets</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="deleteBtn">Delete</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th class="id">Id</th>
                        <th class="fullN">Full name</th>
                        <th class="email">Email</th>
                        <th class="title">Title</th>
                        <th class="messageBox">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $msg->readData();
                        foreach($data as $msgs): ?>
                        <tr>
                            <td class="id"><?php echo $msgs['contact_id']; ?></td>
                            <td class="fullN"><?php echo $msgs['fullName']; ?></td>
                            <td class="email"><?php echo $msgs['email']; ?></td>
                            <td class="title"><?php echo $msgs['title']; ?></td>
                            <td class="messageBox"><?php echo $msgs['msg']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Delete message:</p>
            <div>
                <p>Message id:</p>
                <input class="deleteId" type="number" name="deleteId"> 
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Contact.js"></script>
</body>
</html>