<?php
include 'includes/Common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$email=$_SESSION['email'];
$old_password=$_POST['oldp'];
$new_password=$_POST['newp'];
$retype_password=$_POST['rep'];
if(strlen($new_password)!= strlen($retype_password)){
     header('location:settings.php?password_error=Re-enter new password again');
}
$select_pass="select password from users where email='$email'";
$execute= mysqli_query($conn, $select_pass) or die(mysqli_error($conn));
if(mysqli_num_rows($execute)==0){
    header('location:settings.php?noresult_error=Enter valid old password');
}else{
    $update_query="update users set password='$new_password' where email='$email'";
    $execute_update= mysqli_query($conn, $update_query) or die(mysqli_error($conn));
    echo "Password reset!";
}
?>