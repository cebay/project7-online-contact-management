<?php
  require('../config/class.php');

  if($_GET['filter']==0) {

    $reported_users = $opr->select_records('*', TBL_USER);
  } else {
    $reported_users = $opr->find_records('*', TBL_USER, "user_type = " . $_GET['filter']);
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
                          <!--left-->
                            <div class="col-md-3" id="leftCol">
                                <?php include("../partials/nav.php"); ?>
                            </div><!--/left-->
                          
                          <!--right-->
                          <div class="col-md-9">
                            <!-- Single button -->
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Filter By <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="?filter=0">All</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?filter=1">normal account</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?filter=22">Silver</a></li>
                                    <li><a href="?filter=21">Gold</a></li>
                                    <li><a href="?filter=23">Diamond</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <a href="csv-generator.php?filter=<?php echo $_GET['filter'] ?>" class="btn btn-sm btn-primary pull-right">Export to Excel</a>
                              </div>
                            </div>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Type</th>
                                  <th>Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $i = 1;
                                while($user = mysql_fetch_array($reported_users)){
                                ?>
                                <tr>
                                  <td><?php echo $i++;?></td>
                                  <td><?php echo $user['user_name']; ?></td>
                                  <td>
                                    <?php echo $opr->user->get_user_type($user['user_type']); ?>
                                  </td>
                                  <td>
                                    <label>
                                      <span class="label label-<?php echo (($user['user_status']==1) ? 'success':'warning'); ?>">
                                        <?php echo (($user['user_status']==1) ? 'enabled':'disabled'); ?>
                                      </span>
                                    </label>
                                  </td>
                                </tr>
                                <?php 
                                }
                                ?>
                              </tbody>
                            </table>

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
