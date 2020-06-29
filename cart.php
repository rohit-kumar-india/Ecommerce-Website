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
        $item_details_query="select ui.user_id,ui.item_id,i.name,i.price from users_items ui inner join items i on ui.item_id=i.id where ui.user_id='$user_id' and ui.status='Added to cart'";
        $item_details_submit= mysqli_query($con, $item_details_query) or die(mysqli_error($con));
        $i=1;
        
        
        ?>
         <br><p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h2><?php if (mysqli_num_rows($item_details_submit)==0){
                echo 'Add Items To The Cart First';} else {?></h2>
            <table class="table">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php $sum=0; while ($item=mysqli_fetch_array($item_details_submit)){ ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td> <a href="cart_remove.php?id=<?php echo $item['item_id'];?>" class='remove_item_link'> Remove</a></td>
                </tr>
                <?php $sum=$sum+$item['price'];
                $i++; } 
                ?>
                <tr>
                    <td></td>
                    <th>Total<th>
                    <th><?php echo $sum; ?></th>
                    <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
                <?php } ?>
        </div>
        </div>
        <br><p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
