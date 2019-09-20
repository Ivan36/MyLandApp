<?php 
include('function/config.php');
session_start();
$id  =  $_SESSION['id'];
$query = $conn->query("UPDATE user SET status ='offline' WHERE id = '$id'");

session_destroy();
header('location:index.php');
?>