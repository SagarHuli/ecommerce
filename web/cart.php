<?php
require 'includes/Common.php';
if(!isset($_SESSION['email'])){
    header('location:Login.php');
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
        <title>Cart</title>
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
        <div class="container" id="table-adjust" style="margin-top: 60px;">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <?php
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $query = "SELECT items.price AS Price, items.pid FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id'";
                        $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Price</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $id=NULL;
                            while($row= mysqli_fetch_array($result)){
                                $sum+=$row['Price'];
                                $id=$row['pid'].",";
                                echo "<tr><td>"."#".$row['pid']."</td><<td>"."Rs.".$row['Price']."</td></tr>";
                            }$id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                    </tbody>
                    <?php
                        } else {
                            echo "<a href='home.php'>Add items</a> to the cart first!";
                        }
                        ?>
                </table>
            </div>
        </div>
        <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>
