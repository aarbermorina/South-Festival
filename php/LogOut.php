<?php
session_start();
session_destroy();
header("Location: ../pages/Sign-in.php");
?>