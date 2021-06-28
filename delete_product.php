<?php
include 'db_connect.php';
session_start();

$selected_product = $_POST['delete'];

$sql = "DELETE FROM `products` WHERE `p_id` = '$selected_product';";
$result = mysqli_query($connection, $sql);
header("location: admin_products.php");
