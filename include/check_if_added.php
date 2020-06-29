<?php
function check_if_added_to_cart($item_id){
    $con= mysqli_connect('localhost', 'root', 'root', 'store') or die(mysqli_error($con));
    $user_id=$_SESSION['user_id'];
    $check_cart_query="select * from users_items where item_id='$item_id' and user_id ='$user_id' and status='Added to cart'";
    $check_cart_submit= mysqli_query($con, $check_cart_query) or die(mysqli_error($con));
    if (mysqli_num_rows($check_cart_submit)>=1){
        return '1';
    } else {
    return '0';
    }
}
?>

