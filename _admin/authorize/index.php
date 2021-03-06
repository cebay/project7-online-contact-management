<?php
  $current_page = 'authorize';
  require('../config/class.php');

  if($_GET) {
    $opr->authorize->aut_id          = $_GET['aut_id'];
    $opr->authorize->aut_manage_user = ($_POST['aut_manage_user']=="on") ? 1: 0;
    $opr->authorize->aut_view_report = ($_POST['aut_view_report']=="on") ? 1: 0;

    $opr->authorize->update();
  }
  $auth_users = $opr->select_records('*', TBL_AUTHORIZE);
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
                            <?php
                            if(mysql_num_rows($auth_users) > 0) {
                            ?>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Manage Members</th>
                                  <th>View Report</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $i = 1;
                                while($auth_user = mysql_fetch_array($auth_users)){
                                ?>
                                <form method="post" action="?aut_id=<?php echo $auth_user['aut_id']; ?>">
                                <tr>
                                  <td><?php echo $i++;?></td>
                                  <?php
                                  $rows = $opr->find_records("*",TBL_USER,"user_id = " . $auth_user['user_id']);
                                  $fetched_row = mysql_fetch_assoc($rows);
                                  ?>
                                  <td><?php echo $fetched_row["user_name"] ?></td>
                                  <td>
                                    <input name="aut_manage_user" type="checkbox" <?php echo (($auth_user['aut_manage_user']==1) ? 'checked':' '); ?>>
                                  </td>
                                  <td>
                                    <input name="aut_view_report" type="checkbox" <?php echo (($auth_user['aut_view_report']==1) ? 'checked':' '); ?>>
                                  </td>
                                  <td>
                                    <input type="submit" value="update" class="btn btn-xs btn-primary">
                                  </td>
                                </tr>
                                </form>
                                <?php 
                                }
                                ?>
                              </tbody>
                            </table>
                            <?php
                            } else {
                              echo "<p>No record.</p>";
                            }
                            ?>
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
