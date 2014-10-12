<?php
  $current_page = 'manage-member';
  require_once('../config/class.php');

  if($_GET['action']=='update') {
    $opr->user->user_id          = $_GET['user_id'];
    $user_current_status    = $opr->user->find_user('user_status', TBL_USER, $_GET['user_id']);
    $opr->user->user_status = ($user_current_status['user_status'] == 1)? 0 : 1;

    $opr->user->manage_status();
  }
  $managed_users = $opr->select_records('*', TBL_USER);
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
                            
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>User name</th>
                                  <th>Plan</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $i = 1;
                                while($user = mysql_fetch_array($managed_users)){
                                  $user_type = 'Free';

                                  switch($user['user_type']) {
                                    case 21:
                                            $user_type = 'Gold';
                                            break;
                                    case 22:
                                            $user_type = 'Silver';
                                            break;
                                    case 23:
                                            $user_type = 'Diamond';
                                            break;
                                  }
                                  ?>
                                    <tr>
                                      <td><?php echo $i++;?></td>
                                      <td><?php echo $user['user_name']; ?></td>
                                      <td><?php echo $user_type; ?></td>
                                      <td>
                                        <label>
                                          <input type="checkbox" <?php echo (($user['user_status']==1) ? 'checked':' '); ?>> 
                                          <a href="?action=update&user_id=<?php echo $user['user_id'] ?>" class="label label-<?php echo (($user['user_status']==1) ? 'primary':'danger'); ?>">
                                            <?php echo (($user['user_status']==1) ? 'enabled':'disabled'); ?>
                                          </a>
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
