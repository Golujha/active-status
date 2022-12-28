<?php include("config.php");
$id = $_GET['id'];
$status = $_GET['status'];
$updatequery = "UPDATE student SET status=$status WHERE id=$id";
mysqli_query($con,$updatequery);
header("location:disactive.php");
?>