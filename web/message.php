<?php
require 'includes/Common.php';
$user_id=$_SESSION['id'];
$message=$_POST['message'];
$insert="insert into messages(user_id,message)values('$user_id','$message')";
$execute= mysqli_query($conn, $insert) or die(mysqli_error($conn));
echo 'Your querry is submitted. You will receive the response very shortly!';