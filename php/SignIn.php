<?php
    class SignIn{
        public function __construct(){
            require_once '../controllers/UserController.php';
            $user = new UserController();
            $details = $user->readData();
            foreach($details as $users){
                if($users['email'] == $_POST['email']){
                    if($users['password'] == $_POST['password']){
                        $_SESSION['name'] = $users['name'];
                        $_SESSION['lastName'] = $users['lastName'];
                        $_SESSION['email'] = $users['email'];
                        $_SESSION['password'] = $users['password'];
                        $_SESSION['role'] = $users['role'];
                        $_SESSION['user_id'] = $users['user_Id'];
                        return header("Location: Home.php");
                    }
                    echo '<script>
                        document.getElementById("labelSIPassword").innerHTML="Password incorrect!";
                        
                    </script>';
                }
                echo '<script>
                    document.getElementById("labelSIEmail").innerHTML="Email is invalid!";
                    document.getElementById("SIemail").value="'.$_POST['email'].'";
                </script>';
            }
        }
    }

?>