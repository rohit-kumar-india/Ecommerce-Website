<?php
$con= mysqli_connect('localhost', 'root', '', 'store') or die(mysqli_error($con));
echo $con;
session_start();
?>