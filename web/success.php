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
        <title>Success</title>
         <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container text-center" style="margin-top: 60px;">
            <div class="jumbotron">
                <h1>Your order is confirmed!</h1>
                <p>Thank you for shopping with us.<a href="home.php">Click here</a> to purchase any other item.</p>
            </div>
        </div>
        <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>
