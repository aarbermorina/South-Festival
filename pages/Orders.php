<?php
    require_once '../controllers/OrdersController.php';
    require_once '../controllers/ActivityController.php';
    session_start();

    $activity = new ActivityController();
    $order = new OrdersController();
    if(isset($_POST['insert'])){
        $activity->orderAdd($_SESSION['name'],$_SESSION['lastName'],$_POST);
        $order->addOrder($_POST);
    }

    if(isset($_GET['delete'])){
        $activity->orderRemove($_SESSION['name'],$_SESSION['lastName'],$_GET);
        $order->removeOrder($_GET);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../design/Orders.css">
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
            <li><a href="Orders.php" id="dash-nav">Orders</a></li>
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
                        <th class="thID">Id</th>
                        <th class="thID">User Id</th>
                        <th class="thName">Name</th>
                        <th class="thName">Last Name</th>
                        <th class="thValidity">Type</th>
                        <th class="thValidity">Price</th>
                        <th class="thValidity">Validity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $order->readData();
                        foreach($data as $orders): ?>
                        <tr>
                            <td><?php echo $orders['order_id'] ?></td>
                            <td><?php echo $orders['user_id'] ?></td>
                            <td><?php echo $orders['name'] ?></td>
                            <td><?php echo $orders['lastName'] ?></td>
                            <td><?php echo $orders['type'] ?></td>
                            <td><?php echo $orders['price'].' $' ?></td>
                            <td><?php echo $orders['validity'].' days' ?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </form>
    </div>

    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Add order:</p>
            <div>
                <p>User id:</p>
                <input class="userInputs" type="number" name="userId">
                <p>Ticket id:</p>
                <input class="userInputs" type="number" name="ticketId">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">Remove order:</p>
            <div>
                <p>Order id:</p>
                <input class="deleteId" type="number" name="deleteId">
            </div>
            
            <input class="delete" id="deleteBtn" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Admin.js"></script>
</body>
</html>