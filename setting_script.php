<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$oldpassword=$_POST['oldpassword'];
$newpassword=md5($_POST['newpassword']);
$renewpassword=md5($_POST['renewpassword']);
$user_id=$_SESSION['user_id'];
$password_query="select password from users where id='$user_id'";
$password_submit= mysqli_query($con, $password_query) or die(mysqli_error($con));
$password= mysqli_fetch_array($password_submit);?>
<br><p>&nbsp;</p>
        <p>&nbsp;</p>
            <head>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"> </script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
    </head><?php
if ($password['password']!== md5($oldpassword)){
    ?> <?php
    echo '<h1>Please enter correct old password</h1>';?>

   <!DOCTYPE html>
<html>
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
<?php
}elseif ($newpassword!==$renewpassword) {
    echo '<h1>New password do not match</h1>';?>
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
    </body><?php
}else{
    $update_password_query="update users set password='$newpassword' where id='$user_id'";
    $update_password_submit= mysqli_query($con, $update_password_query) or die(mysqli_error($con));
    if ($update_password_submit){
        echo '<h1>Password changed successfully</h1>';
    }
}
?>