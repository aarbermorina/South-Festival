<?php
    require_once '../controllers/UserController.php';
    session_start();

    $user = new UserController();
    $details = $user->readData();
    foreach($details as $users){
        if($users['email'] == $_SESSION['email']){
            $_SESSION['name'] = $users['name'];
            $_SESSION['lastName'] = $users['lastName'];
            $_SESSION['email'] = $users['email'];
            $_SESSION['password'] = $users['password'];
            $_SESSION['role'] = $users['role'];
            $_SESSION['user_id'] = $users['user_Id'];
            return header("Location: ../pages/Home.php");
        }
    }

?>