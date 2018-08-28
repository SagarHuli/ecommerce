<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){
                    ?>
                <li>><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                <?php
                }else{
                    ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
             <?php } ?>
                
            </ul>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">LOGIN</h3>
            </div>
            <div class="modal-body">
                <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                               <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                            </form>
                <p style="padding-top: 10px;">Don't have an account? <a href="signup.php" style="text-decoration: none;">Register</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>