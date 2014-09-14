<?php
  require("../config/class.php");

  if($_POST) {
    $opr->user->user_name         = $_POST['user_name'];
    $opr->user->user_password     = $_POST['user_password'];
    $opr->user->user_type         = $_GET['plan'];
    
    $user_contact_num = 50;
    $user_expired_date = 3; // unit in month
    switch($_GET['plan']) {
      case 21:
              $user_contact_num  = 100;
              $user_expired_date = 12;
              break;
      case 22:
              $user_contact_num  = 500;
              $user_expired_date = 12 * 3;
              break;
      case 23:
              $user_contact_num  = 5000;
              $user_expired_date = 12 * 5;
              break;
    }
    $opr->user->user_contact_num  = $user_contact_num;
    $opr->user->user_expired_date = $opr->add_date(date("Y-m-d"),$user_expired_date);
    $opr->user->user_status       = 1; // enable by default

    if(!$opr->user->save()) {
      echo "Register Fail!";
    } else {
      header("location: ../");
    }
  }
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
                                        <label for="user_name" class="lb-size">Username:</label>
                                        <input type="text" class="form-control f-control-size" name="user_name" id="user_name" value="">
                                      </div>
                                      <div class="form-group">
                                        <label for="user_password" class="lb-size">Password:</label>
                                        <input type="password" class="form-control f-control-size" name="user_password" id="user_password" value="">
                                      </div>
                                      <div class="form-group">
                                        <input type="submit" value="Register Now" class="btn btn-success btn-sm pull-right">
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
