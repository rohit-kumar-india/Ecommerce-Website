<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"> </script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        include 'include/header.php';
        $user_id=$_SESSION['user_id'];
        $status_confirm_query="update users_items set status='Confirmed' where user_id='$user_id'";
        $status_confirm_submit= mysqli_query($con, $status_confirm_query) or die(mysqli_error($con));
        ?>
         <br><p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="container text-center">
            <div class="jumbotron">
                <h2>
                Your order is confirmed.Thank you for shopping with us.</h2><hr>
                <p><a href="product.php">Click here</a> to purchase any other item.</p>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
