<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
        ?>
         <br><p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h2>Change Password</h2>
                <form method="post" action="setting_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required = "true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password" name="newpassword" required = "true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Re-type New Password" name="renewpassword" required = "true">
                    </div>
                    <button type="submit" name="change" class="btn btn-primary">Change</button><br><br>
                </form>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
