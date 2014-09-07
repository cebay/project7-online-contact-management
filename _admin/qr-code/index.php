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
                                        <label for="con_fname" class="lb-size">First Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_fname" placeholder="First Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_lname" class="lb-size">Last Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_lname" placeholder="Last Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_com_name" class="lb-size">Company Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_com_name" placeholder="company name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_title" class="lb-size">Title:</label>
                                        <input type="text" class="form-control f-control-size" name="con_title" placeholder="title">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_phone" class="lb-size">Telephone:</label>
                                        <input type="text" class="form-control f-control-size" name="con_phone" placeholder="telephone">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_email" class="lb-size">Email:</label>
                                        <input type="text" class="form-control f-control-size" name="con_email" placeholder="email">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_url" class="lb-size">URL:</label>
                                        <input type="text" class="form-control f-control-size" name="con_url" placeholder="url">
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                      <div class="form-group">
                                        <label for="con_street_name" class="lb-size">Street Name:</label>
                                        <input type="text" class="form-control f-control-size" name="con_street_name" placeholder="street name">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_city" class="lb-size">City:</label>
                                        <input type="text" class="form-control f-control-size" name="con_city" placeholder="city">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_state_name" class="lb-size">State:</label>
                                        <input type="text" class="form-control f-control-size" name="con_state_name" placeholder="state">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_postal_code" class="lb-size">Postal Code:</label>
                                        <input type="text" class="form-control f-control-size" name="con_postal_code" placeholder="postal code">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_country" class="lb-size">Country:</label>
                                        <input type="text" class="form-control f-control-size" name="con_country" placeholder="country">
                                      </div>
                                      <div class="form-group">
                                        <label for="con_note" class="lb-size">Note:</label>
                                        <textarea col="5" rows="4" class="form-control" name="con_note"></textarea>
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
