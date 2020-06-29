<?php
require 'include/common.php';
if (isset($_SESSION['email'])) {
header('location: product.php');
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
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                </center>
            </div>
        </div>
        <br>
        <p>&nbsp;</p>
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="product.php#cameras">
                    <img src="img/camera.jpg" alt="camera" >
                        <div class="caption">
                            <h2>
                                Cameras
                            </h2>
                            <p>
                                Choose among the best available in the world.
                            </p>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="product.php#shirts">
                    <img src="img/shirt.jpg" alt="shirt" >
                        <div class="caption">
                            <h2>
                                Shirts
                            </h2>
                            <p>
                                Our exquisite collection of shirts.
                            </p>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="product.php#watches">
                    <img src="img/watch.jpg" alt="watch" >
                        <div class="caption">
                            <h2>
                                Watches
                            </h2>
                            <p>
                                Original watches from the best brands.
                            </p>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
