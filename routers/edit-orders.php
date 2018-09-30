<?php
include '../includes/connect.php';
$status = $_POST['status'];
$id = $_POST['id'];
$deleted = 0;

if($status = "Delivered" ){
    $deleted = 1;
}
else {
    $deleted = 0;
}

$sql = "UPDATE orders SET status='$status', date = now(), deleted = $deleted WHERE id=$id;";
$con->query($sql);

header("location: ../all-orders.php");
?>