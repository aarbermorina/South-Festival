<?php
require_once '../controllers/UserController.php';
require_once '../controllers/ActivityController.php';
require_once '../php/navigation.php';

$activity = new ActivityController();
$user = new UserController();
if(isset($_POST["insert"])){
    $activity->userAdd($_SESSION['name'],$_SESSION['lastName'],$_POST);
    $user->insert($_POST);
}
if(isset($_POST["update"])){
    $activity->userEdit($_SESSION['name'],$_SESSION['lastName'],$_POST,$_GET);
    $user->update($_POST,$_GET);
}
if(isset($_GET["delete"])){
    $activity->userRemove($_SESSION['name'],$_SESSION['lastName'],$_GET);
    $user->delete($_GET);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../design/Users.css">
    <title>Users</title>
</head>
<body onload ="updateIF()">
    <div class="header">
        <img src="../img/logo.png" alt="Logo">
        <div class="nav-div">
            <ul>
            <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="Home.php">HOME</a></li>
                <li><a style="font-family: 'Roboto Condensed', sans-serif;" href="#Tickets">TICKETS</a></li>
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
            <li><a href="Users.php" id="dash-nav">Users</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="TicketsDash.php">Tickets</a></li>
        </ul>
        <form class="form">
            <ul class="commands">
                <li><button id="insertBtn">Insert</button></li>
                <li><button id="editBtn">Edit</button></li>
                <li><button id="deleteBtn">Delete</button></li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = $user->readData();
                        foreach($data as $users): ?>
                        <tr>
                            <td><?php echo $users['user_id']; ?></td>
                            <td><?php echo $users['name']; ?></td>
                            <td><?php echo $users['lastName']; ?></td>
                            <td><?php echo $users['email']; ?></td>
                            <td><?php echo $users['password']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>

    <div id="insertForm">
        <form class="insertForm" method="POST">
            <span class="close">&times</span>
            <p id="headP">Insert user:</p>
            <div>
                <p>Name:</p>
                <input class="userInputs" type="text" name="name"> 
            </div>
            <div>
                <p>Last name:</p>
                <input class="userInputs" type="text" name="lastName">
            </div>
            <div>
                <p>Email:</p>
                <input class="userInputs" type="email" name="email">
            </div>
            <div>
                <p>Password:</p>
                <input class="userInputs" type="text" name="password">
            </div>
            
            <input class="save" type="submit" name="insert" value="Save">
        </form>
    </div>

    <div id="editForm">
        <form class="editForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">User id:</p>
            <input class="id" type="number" name="id"> 
            
            <input class="next" id="next" type="submit" value="Next">
        </form>
    </div>

    <?php
        $edit = $user->edit($_GET);
    ?>

    <div id="updateForm">
        <form class="updateForm" method="POST">
            
            <span class="close">&times</span>
            <p id="headP">Update user with id:</p>
            <div>
                <p>Name:</p>
                <input class="updateInputs" type="text" name="name" value="<?php echo $edit['name']; ?>"> 
            </div>
            <div>
                <p>Last name:</p>
                <input class="updateInputs" type="text" name="lastName" value="<?php echo $edit['lastName'] ?>">
            </div>
            <div>
                <p>Email:</p>
                <input class="updateInputs" type="email" name="email" value="<?php echo $edit['email'] ?>">
            </div>
            <div>
                <p>Password:</p>
                <input class="updateInputs" type="text" name="password" value="<?php echo $edit['password'] ?>">
            </div>
            
            <input id="update" class="update" type="submit" name="update" value="Update">
        </form>
    </div>

    <div id="deleteForm">
        <form class="deleteForm" method="GET">
            <span class="close">&times</span>
            <p id="headP">User id:</p>
            <input class="deleteId" type="number" name="deleteId"> 
            
            <input class="delete" id="delete" type="submit" name="delete" value="Delete">
        </form>
    </div>

    <script src="../js/Users.js"></script>
</body>
</html>




