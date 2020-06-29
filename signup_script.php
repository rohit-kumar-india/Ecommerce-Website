<?php
require 'include/common.php';
$name=$_POST['name'];
$email = $_POST['email'];
$password= md5($_POST['password']);
$contact = $_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$user_check_query="select id from users where email='$email'";
$user_check_submit = mysqli_query($con, $user_check_query) or die(mysqli_error($con));
if (mysqli_num_rows($user_check_submit)>0){
    echo "email id already exists";
} else {
$user_registration_query = "insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
if ($user_registration_submit){
 echo "User successfully inserted";
 header('location: login.php');
} else {
    echo "User not successfully inserted";
    }
}
?>