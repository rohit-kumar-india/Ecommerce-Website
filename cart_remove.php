<?php
require 'include/common.php';
$user_id=$_SESSION['user_id'];
$item_id=$_GET['id'];
$remove_item_query="delete from users_items where user_id='$user_id' and item_id='$item_id' and status='Added to cart'";
$remove_item_submit= mysqli_query($con, $remove_item_query) or die(mysqli_error($con));
if ($remove_item_submit){
    header('location: cart.php');
}
?>

