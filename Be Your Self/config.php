<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name="shop_db";
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
$db = new mysqli($server_name, $username, $password, $database_name);
?>