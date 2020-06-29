<?php
require 'include/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= md5($_POST['password']);
$user_login_query = "select * from users where email='$email' and password='$password'";
$user_login_submit = mysqli_query($con, $user_login_query) or die(mysqli_error($con));
if (mysqli_num_rows($user_login_submit)==0){
    echo "Wrong email or password";
} else {
    $user=mysqli_fetch_array($user_login_submit);
    $_SESSION['email']=$user['email'];
    $_SESSION['user_id']=$user['id'];
    header('location: product.php');
}
?>
