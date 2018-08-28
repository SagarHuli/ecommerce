<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        // put your code here
        include 'includes/header.php';
        ?>
        <div class="container-fluid "  style="padding-top: 60px;">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Samsung Galaxy S9</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/1.jpg" alt="" class="img-responsive">
                            <ul id="para">
                                <li>5.7 inches screen,Android 7.1.2 (Nougat)</li>
                                <li>Qualcomm SDM450 Snapdragon 450</li>
                                <li> 12 MP (f/2.2, 1.25 μm), PDAF, LED flash,Geo-tagging</li>
                                <li>touch focus, face/smile detection, HDR, panorama</li>
                            </ul>
                            <a data-toggle="modal" class="btn btn-primary" href="#myModal" id='width_set'>Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>iPhone X</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/iphonex.jpeg" alt="" class="img-responsive" style="height:210px;">
                            <ul id="para">
                                <li>5.8-inch Super Retina AMOLED display</li>
                                <li>4G LTE, GSM, CDMA, HSPA+, 802.11a/b/g/n/ac Wi-Fi</li>
                                <li>Dual 12 MP rear, 7MP FaceTime HD front</li>
                                <li>2,436 x 1,125 pixels (458 ppi)</li>
                            </ul>
                            <a data-toggle="modal" class="btn btn-primary" href="#myModal" id='width_set'>Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Samsung Galaxy Note 8</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/note8.jpeg" alt="" class="img-responsive">
                            <ul id="para">
                                <li>Snapdragon 845 with Adreno 630</li>
                                <li>Super Speed Dual Pixel 12MP rear, 8MP front</li>
                                <li>Iris, fingerprint, face unlock, Intelligent Scan</li>
                                <li>3,000mAh Fast charging</li>
                            </ul>
                              <a data-toggle="modal" class="btn btn-primary" href="#myModal" id='width_set'>Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Oneplus 6</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/oneplus6.jpg" alt="" class="img-responsive" style="height: 210px;">
                            <ul id="para">
                                <li>Super Slow Motion: 1080p,720p video at 240 fps</li>
                                <li>Portrait, Pro Mode, Panorama, HDR, HQ, Dynamic Denoise</li>
                                <li>Resolution: 2280 x 1080 pixels,Dual LED Flash</li>
                                <li>Cover Glass: 2.5D Corning® Gorilla® Glass 5</li>
                            </ul>
                              <a data-toggle="modal" class="btn btn-primary" href="#myModal" id='width_set'>Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Google pixel 2</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/pixel2.jpg" alt="" class="img-responsive" style="height:210px;">
                            <ul id="para">
                                <li>5-inch 1920x1080 AMOLED Gorilla Glass 5 2.5D glass</li>
                                <li>Android 8.0 with Google UI,Qualcomm Snapdragon 835</li>
                                <li>USB-PD, 18W rapid Charging,USB Type-C, Bluetooth 5.0</li>
                                <li>Active Edge sides, eSIM,12.2MP f/1.8 1.4μm pixel</li>
                            </ul>
                             <a data-toggle="modal" class="btn btn-primary" href="#myModal" id='width_set'>Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Vivo Z10</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/vivoz10.jpg" alt="" class="img-responsive" style="height: 210px;">
                            <ul id="para">
                                <li>Octa-core Qualcomm Snapdragon 450,720x1440 pixels</li>
                                <li>4G VoLTE, Wi-Fi, Bluetooth, GPS/ A-GPS, Micro-USB</li>
                                <li>24MP front-facing camera with LED flash,16MP rear camera, LED flash</li>
                                <li>Dimensions: 155.87 × 75.7 × 7.7mm; Weight: 160g</li>
                            </ul>
                            <a data-toggle="modal" class="btn btn-primary" href="#myModal" id='width_set'>Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
