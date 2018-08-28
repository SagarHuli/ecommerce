<?php
require 'includes/Common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Settings</title>
       <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container" style="margin-bottom: 200px;">
            <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <form method="POST" action="settings_script.php">
            <h3>Change Password</h3>
            <div class="form-group">
                <input type="password" name="oldp" placeholder="Old Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="newp" placeholder="New Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="rep" placeholder="Re-type New Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" value="registration_submit">Change</button>
                </form>
        </div>
            </div>
        </div>
         <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>
