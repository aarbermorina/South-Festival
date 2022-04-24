<?php
    session_start();
    if(empty($_SESSION)){
        header("Location: ../pages/Sign-in.php");
    }

    if(isset($_POST['purchase'])){
        require_once '../controllers/OrdersController.php';
        $order = new OrdersController();
        $order->order($_SESSION['user_id'],$_GET['id']);
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../design/Purchase.css">
        <title>Purchase</title>
    </head>
    <body>
        <div class="background">
            <div class="card">
                <h1>Confirm purchase:</h1>
                <form method="POST" class="confirm">
                    <p><?php
                        if($_GET['type'] == 'Believer'){
                            echo 'Believer - ';
                        }elseif($_GET['type'] == 'Early bird'){
                            echo 'Early bird - ';
                        }elseif($_GET['type'] == 'Regular'){
                            echo 'Regular - ';
                        }else{
                            echo 'Confirmed - ';
                        }
                        echo $_GET['validity'].' Days';
                     ?></p>
                     <p><?php echo 'Price: '.$_GET['price'].' $'; ?></p>
                     <input type="submit" name="purchase" value="Confirm">
                </form>
            </div>
        </div>
    </body>
</html>