<?php 
    $current_page = 'root'; 
    require_once('config/class.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" type="text/css" href="../bootstrap-3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container mt-90">
                <div class="main-content">
                    <?php include("partials/header.php"); ?>

                    <!--main-->
                    <div class="container">
                        <div class="row">
                          <!--left-->
                            <div class="col-md-3" id="leftCol">
                                <?php include("partials/nav.php"); ?>
                            </div><!--/left-->
                          
                          <!--right-->
                          <div class="col-md-9">
    
                            <h1>Welcome to OCM</h1>
                            <p>
                                Online Contact Management is a powerful, personalized way to keep all relevant contact 
                                information in one accessible, updateable location. Now everything you need to know is right at 
                                your fingertips:</p>

                            <ul>
                                <li>Phone Numbers</li>
                                <li>Emails</li>
                                <li>Address</li>
                                <li>And Much More!</li>
                            </ul>

                            <img height="300" src="../images/contact-manager.png" alt="contact image flow">
                          </div><!--/right-->
                        </div><!--/row-->
                    </div><!--/container-->
                </div>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script src="../bootstrap-3.2.0/js/bootstrap.min.js"></script>

    </body>
</html>
