<?php
require 'includes/Common.php';
$user_id=$_SESSION['id'];
echo "$user_id";
$item_id=$_GET['id'];
$insert_query="insert into users_items(user_id,item_id)values('$user_id','$item_id')";
$res= mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
header('location:home.php');
?>