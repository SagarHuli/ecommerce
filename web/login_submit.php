<?php
include 'includes/Common.php';
$email= mysqli_real_escape_string($conn,$_POST['email']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);
$pass= md5($pass);
$select_users="select id,name,email from users where users.email='$email' and users.password='$pass'";
$execute_select= mysqli_query($conn, $select_users) or die(mysqli_error($conn));
if(mysqli_num_rows($execute_select)==0){
    echo "You haven't signed up yet <a href='signup.php'>Sign up</a> now";
}else{
    $row= mysqli_fetch_array($execute_select);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']= $row['id'];
    $_SESSION['fname']=$row['fname'];
    header('location:home.php');
}
?>

