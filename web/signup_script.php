<?php
require 'includes/Common.php';
if(isset($_SESSION['email'])){
    header('location:products.php');
}
$email=$_POST['email'];
$fname=$_POST['fname'];
$password=$_POST['password'];
$password= md5($password);
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$val_fname="^[a-zA-Z]{1,15}+/.{0,1}[a-zA-Z]{0,15}$";
$val_email="^[a-z0-9_]{1,}+@+[a-z0-9]{1,}+/.[a-z]{2,3}$";

if(!(preg_match($val_name, $fname))){
    header('location:signup.php?fname_error=enter valid name');
}
if(!preg_match($val_email, $email)){
    header('location:signup.php?email_error=enter valid email'); 
}
$select_query="select id from users where users.email='$email'";
$exec_select= mysqli_query($conn, $select_query);
if(mysqli_num_rows($exec_select)>0){
    echo "User already exists.";
}else{
 $insert_query="insert into users(name,email,password,contact,city,address)values('$fname','$email','$password','$contact','$city','$address')"; 
 $exec_insert= mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
$_SESSION['id']= mysqli_insert_id($conn);
$_SESSION['email']=$email;
$_SESSION['fname']=$fname;
$_SESSION['password']=$password;
$_SESSION['contact']=$contact;
$_SESSION['city']=$city;
$_SESSION['address']=$address;
header('location:home.php');
}
?>
