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

        <link rel="stylesheet" type="text/css" href="../../bootstrap-3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container mt-90">
                <div class="main-content">
                    <?php include("../partials/header.php"); ?>

                    <!--main-->
                    <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              
                                <form role="form" id="frm" method="post">
                                    <input type="hidden" value="<?php echo $_GET['con_id'];?>" name="hidden_con_id">
                                    <div class="col-xs-6 col-sm-offset-3">
                                      <h1>Registration</h1>
                                      <p>Welcome! Ready to register with Gmarket? <br>
                                        It’s free and simple!</p>
                                      <div class="form-group">
                                        <label for="con_fname" class="lb-size">Username:</label>
                                        <input type="text" class="form-control f-control-size" name="con_fname" id="con_fname" value="<?php echo $record['con_fname']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_lname" class="lb-size">Password:</label>
                                        <input type="text" class="form-control f-control-size" name="con_lname" id="con_lname" value="<?php echo $record['con_lname']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_com_name" class="lb-size">Company Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_com_name" id="con_com_name" value="<?php echo $record['con_com_name']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_title" class="lb-size">Title:</label>
                                        <input type="text" class="form-control f-control-size" name="con_title" id="con_title" value="<?php echo $record['con_title']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_phone" class="lb-size">Telephone:</label>
                                        <input type="text" class="form-control f-control-size" name="con_phone" id="con_phone" value="<?php echo $record['con_phone']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_email" class="lb-size">Email:</label>
                                        <input type="text" class="form-control f-control-size" name="con_email" id="con_email" value="<?php echo $record['con_email']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_url" class="lb-size">URL:</label>
                                        <input type="text" class="form-control f-control-size" name="con_url" id="con_url" value="<?php echo $record['con_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                        <button class="btn btn-success btn-sm pull-right">Register Now</button>
                                      </div>
                                    </div>
                                </form>
                            </div>
                          </div><!--/right-->
                        </div><!--/row-->
                    </div><!--/container-->
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
        <script src="../../bootstrap-3.2.0/js/bootstrap.min.js"></script>

    </body>
</html>
