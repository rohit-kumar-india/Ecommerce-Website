<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'lifestyle_store';

$con= mysqli_connect($host, $username, $password, $database) or die(mysqli_error($con));
session_start();
?>