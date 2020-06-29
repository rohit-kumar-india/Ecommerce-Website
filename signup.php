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
        <br><p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>SIGN UP</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Name" name="name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control"  placeholder="Contact" name="contact" required = "true" pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="City" name="city" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Sign up</button><br>
                            </form>
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
