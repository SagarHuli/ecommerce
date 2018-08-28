
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
         <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="row">
        <div class="col-xs-4 col-xs-offset-1">
            <img src="images/login.png" alt="" class=" img-responsive" style="padding-top: 85px;">
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
        <div class="col-xs-4 col-xs-offset-2">
            <form method="POST" action="signup_script.php" style="padding-bottom: 20px;">
                <h1>
                    SIGN UP</h1>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="fname" pattern="^[a-zA-Z]{1,15}+/.{0,1}[a-zA-Z]{0,15}$"> 
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" pattern="^[a-z0-9_]{1,}+@+[a-z0-9]{1,}+/.[a-z]{2,3}$" required="true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Contact" name="contact" pattern="^[0-9]{10}$" required="true">
                </div>
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="City" name="city" pattern="^[a-zA-Z]{1,}$" required="true">
                </div>
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Address" name="address" pattern="^[a-zA-Z]{1,}+/.{1,}$" required="true">
                </div>
                 <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
            </form>
        </div>
            </div>
        </div>
        </div>
        <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>
