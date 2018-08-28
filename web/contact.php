<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Store</title>
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
        <div class="container" style="padding-top: 60px;">
            <div class="row">
                <div class="col-xs-8">
                    <h3>LIVE SUPPORT</h3><br>
                    <h5>24 hours | 7 days a week | 365 days a year Live Technical Support</h5><br>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of the page when looking at its layout.
                        We are here to help you out in all of your queries and clarifications.
                        Our team of successful and dedicated engineers will help you in clearing your doubts.<br>
                        So feel free and submit the form below stating your message.
                    </p>
                </div>
                <div class="col-xs-2 col-xs-offset-1">
                    <img src="images/user.png" alt="" class="img-responsive" style="padding-top: 50px;">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                     <form method="POST" action="message.php">
            <h3>CONTACT US</h3>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea name="message" class="form-control" rows="5" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>