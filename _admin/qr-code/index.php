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
                          <!--left-->
                            <div class="col-md-3" id="leftCol">
                                <?php include("../partials/nav.php"); ?>
                            </div><!--/left-->
                          
                          <!--right-->
                          <div class="col-md-9">
                            
                            <div class="row">
                                <form role="form">
                                    <div class="col-xs-12 col-sm-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">First Name:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="First Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">Last Name:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="Last Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1" class="lb-size">Company Name:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputPassword1" placeholder="phone">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">Title:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="First Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">Telephone:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="Last Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1" class="lb-size">Email:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputPassword1" placeholder="phone">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1" class="lb-size">URL:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputPassword1" placeholder="phone">
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">Street Name:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="First Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">City:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="Last Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1" class="lb-size">State:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputPassword1" placeholder="phone">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">Postal Code:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="First Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1" class="lb-size">Country:</label>
                                        <input type="text" class="form-control f-control-size" id="exampleInputEmail1" placeholder="Last Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1" class="lb-size">Note:</label>
                                        <textarea col="5" rows="4" class="form-control"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-success pull-right btn-lg">Generate</button>
                                    </div>
                                </form>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="qr-image"></div>
                                </div>
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
