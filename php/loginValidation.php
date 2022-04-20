<?php
    class LoginValidate{

        public function __construct(){
            $isAlpha = '/^[a-zA-Z\s]+$/';
            $isEmail = '/^[\S]+@[\S]+\.[a-zA-Z]{2,3}$/';
            $isPassword = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[\W]).{6,})\S$/';
            
            require_once '../controllers/UserController.php';
        
            $user = new UserController();
            $email = $user->emailRegistered($_POST);
            
            if($_POST['email'] != $email['email']){
                if(preg_match($isAlpha,$_POST['name']) && preg_match($isAlpha,$_POST['lastName']) && preg_match($isEmail,$_POST['email']) 
                && preg_match($isPassword,$_POST['password']) && $_POST['password'] == $_POST['cpass']){
                    session_start();
                    $user->insert($_POST);
                    $_SESSION['email'] = $_POST['email'];
                    header("Location: ../php/Registered.php");
                }
                
            }
            echo '<script>
            document.getElementById("labelEmail").innerHTML="Email is already registered!";
            document.getElementById("sName").value="'.$_POST['name'].'";
            document.getElementById("sLName").value="'.$_POST['lastName'].'";
            document.getElementById("sEmail").value="'.$_POST['email'].'";
            document.getElementById("sPassword").value="'.$_POST['password'].'";
            document.getElementById("sCPassword").value="'.$_POST['password'].'";
            </script>';

        }
    }
?>