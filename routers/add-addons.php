<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$category = 'add_ons';
$sql = "INSERT INTO items (name, price, category) VALUES ('$name', $price, '$category')";
$con->query($sql);
header("location: ../add_ons.php");
?>