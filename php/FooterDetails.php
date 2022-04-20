<?php
    class FooterDetails{
        public function __construct(){
            if(empty($_SESSION)){
                echo '<li><a href="signin.php">Sign in</a></li>';
            }
        }
    }
?>