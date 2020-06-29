<?php
$item_id=$_GET['id'];
include 'include/common.php';
$user_id=$_SESSION['user_id'];
$add_cart_query="INSERT INTO users_items(user_id,item_id,status) VALUES('$user_id','$item_id', 'Added to cart')";
$add_cart_submit= mysqli_query($con, $add_cart_query) or die(mysqli_error($con));
header('location: product.php');
?>
