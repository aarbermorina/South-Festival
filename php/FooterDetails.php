<?php
    class FooterDetails{
        public function __construct(){
            if(empty($_SESSION)){
                echo '<li><a href="Sign-in.php">Sign in</a></li>';
            }
        }
    }
?>