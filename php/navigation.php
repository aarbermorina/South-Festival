<?php
    class Navigation{
        public function __construct(){
            
            if(empty($_SESSION)){
                echo '<li><a href="Sign-in.php">SIGN IN</a></li>';
            }
            else{
                if($_SESSION['role'] == 1){
                    echo '<style>
                        .divider{
                            height: 10px;
                            width: 2px;
                            background: #f26dc1;
                            margin-inline: 10px;
                        }
                        .user{
                            color: white;
                            font-weight: 400;
                            font-size: 18px;
                            font-family: Raleway, sans-serif;
                            text-align: center;
                            background: linear-gradient(0deg,#f93bb3,#f93cc5);
                            padding-inline: 20px;
                            padding-block: 5px;
                            box-shadow: 3px 3px 6px rgb(0, 0, 0),-3px -3px 6px rgb(0, 0, 0);
                        }
                        
                        </style>
                    <div class="divider"></div>
                    <li><a id="dash-nav" href="Users.php">Dashboard</a></li>
                    <li class="user">'.$_SESSION['name'].'<br>'.$_SESSION['lastName'].'</li>;
                    <li><a href="../php/LogOut.php">Log out</a></li>';
                }else{
                    echo '<style>
                        .divider{
                            height: 10px;
                            width: 2px;
                            background-color: #2e3036;
                            margin-inline: 10px;
                        }
                        .user{
                            color: white;
                            font-weight: 400;
                            font-size: 18px;
                            font-family: Raleway, sans-serif;
                            text-align: center;
                            background: linear-gradient(0deg,#f93bb3,#f93cc5);
                            padding-inline: 10px;
                            padding-block: 5px;
                            box-shadow: 3px 3px 6px rgb(0, 0, 0),-3px -3px 6px rgb(0, 0, 0);
                        }

                        </style>
                    <div class="divider"></div> 
                    <li class="user">'.$_SESSION['name'].'<br>'.$_SESSION['lastName'].'</li>
                    <li><a href="../php/LogOut.php">Log out</a></li>';
                }
            }
        }
    }
    
?>