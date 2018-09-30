<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$category = 'drinks';
$sql = "INSERT INTO items (name, price, category) VALUES ('$name', $price, '$category')";
$con->query($sql);
header("location: ../drinks.php");
?>