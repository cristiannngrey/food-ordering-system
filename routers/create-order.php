<?php
include '../includes/connect.php';
include '../includes/wallet.php';

$customer_id = $user_id;
$total = 0;
$status = "Yet to be delivered";

$sql = "INSERT INTO orders (customer_id, date, total, status) VALUES ('$customer_id', date = now(), $total, '$status')";
$con->query($sql);
header("location: ../order-food.php");
?>