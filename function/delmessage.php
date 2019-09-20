<?php 
include "config.php";
 session_start();

 $id = $_GET['msg'];

 $sql = $conn->query("DELETE FROM messages WHERE msg='$id'");

 header('location:../content.php');

?>