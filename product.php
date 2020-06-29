<?php
require 'include/common.php';
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
        include 'include/check_if_added.php';
        ?>
        <br><p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="container" id="content">
            <div class="jumbotron">
                <h1>
                Welcome to our Lifestyle Store!
                </h1>
                <p>
                    We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
                </p>
            </div>
            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/5.jpg" alt="camera" >
                        <div class="caption">
                            <h2>
                                Cannon EOS
                            </h2>
                            <p>
                                Price: Rs.36000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(1)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/2.jpg" alt="camera" >
                        <div class="caption">
                            <h2>
                                Nicon DSLR
                            </h2>
                            <p>
                                Price: Rs.40000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(2)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=2" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/3.jpg" alt="camera" >
                        <div class="caption">
                            <h2>
                                Sony DSLR
                            </h2>
                            <p>
                                Price: Rs.45000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(3)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=3" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/4.jpg" alt="camera" >
                        <div class="caption">
                            <h2>
                                Olympus DSLR
                            </h2>
                            <p>
                                Price: Rs.50000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(4)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=4" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/8.jpg" alt="shirt" >
                        <div class="caption">
                            <h2>
                                H&W
                            </h2>
                            <p>
                                Price: Rs.800.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(9)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=9" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/6.jpg" alt="shirt" >
                        <div class="caption">
                            <h2>
                                Luis Phil
                            </h2>
                            <p>
                                Price: Rs.1000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(10)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=10" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/13.jpg" alt="shirt" >
                        <div class="caption">
                            <h2>
                                John Zok
                            </h2>
                            <p>
                                Price: Rs.1500.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(11)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=11" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/14.jpg" alt="shirt" >
                        <div class="caption">
                            <h2>
                                Jhalsani
                            </h2>
                            <p>
                                Price: Rs.1300.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(12)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=12" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/9.jpg" alt="watch" >
                        <div class="caption">
                            <h2>
                                Titan Model #301
                            </h2>
                            <p>
                                Price: Rs.13000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(5)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=5" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/10.jpg" alt="watch" >
                        <div class="caption">
                            <h2>
                                Titan Model #201
                            </h2>
                            <p>
                                Price: Rs.3000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(6)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=6" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/11.jpg" alt="watch" >
                        <div class="caption">
                            <h2>
                                HMT Milan
                            </h2>
                            <p>
                                Price: Rs.8000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(7)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=7" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/12.jpg" alt="watch" >
                        <div class="caption">
                            <h2>
                                Faber Luba #111
                            </h2>
                            <p>
                                Price: Rs.18000.00
                            </p>
                            <?php
                                    if (!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                    } elseif (check_if_added_to_cart(8)) {
                            ?>
                            <a href="#" class="btn btn-primary btn-block" disabled>Added to cart</a>
                            <?php
                                    } else {
                            ?>
                            <a href="cart_add.php?id=8" class="btn btn-primary btn-block">Add to cart</a>
                            <?php            
                                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
