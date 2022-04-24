<?php
require_once '../controllers/AdminController.php';
require_once '../controllers/ActivityController.php';
require_once '../php/navigation.php';

$activity = new ActivityController();
$admin = new AdminController();
if(isset($_POST['insert'])){
    $admin->insert($_POST);
    $activity->adminAdd($_SESSION['name'],$_SESSION['lastName'],$_POST);
}
if(isset($_GET['delete'])){
    $activity->adminRemove($_SESSION['name'],$_SESSION['lastName'],$_GET);
    $admin->delete($_GET);
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../design/Admin.css">
    <title>Admin</title>
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
            <li><a href="Admin.php" id="dash-nav">Admin</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="TicketsDash.php">Tickets</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="insertBtn">Add</button></li>
                <li><button id="deleteBtn">Remove</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th>Admin Id</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Last name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $admin->readAdmins();
                        
                        foreach($data as $admins): ?>
                        <tr>
                            <td><?php echo $admins['admin_id']; ?></td>
                            <td><?php echo $admins['user_id']; ?></td>
                            <td><?php echo $admins['name']; ?></td>
                            <td><?php echo $admins['lastName']; ?></td>
                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
            <table class="activity">
                <thead>
                    <th>Id</th>
                    <th>Activity</th>
                </thead>
                <tbody>
                    <?php
                        $acts = $activity->readData();
                        foreach($acts as $activities): ?>
                        <tr>
                            <td><?php echo $activities['activity_id']; ?></td>

                            <td class="act">
                                <?php echo $activities['activity']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>

    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Add admin:</p>
            <div>
                <p>User id:</p>
                <input class="userInputs" type="text" name="userId">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Remove admin:</p>
            <div>
                <p>User id:</p>
                <input class="deleteId" type="number" name="deleteId"> 
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Admin.js"></script>
</body>
</html>




