<?php
  require('../config/class.php');
  $records = $opr->select_records('*', TBL_CONTACT);
  if($_GET['action']=='delete') {
    $opr->contact->con_id = $_GET['con_id'];

    $opr->contact->delete();
    $records = $opr->select_records('*', TBL_CONTACT);
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
                            <a href="generate-qr-code.php" class="btn btn-sm btn-primary pull-right">Create new</a>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Code</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $i=1; 
                                while($row = mysql_fetch_array($records)) {
                                ?>
                                  <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['con_fname']; ?></td>
                                    <td><?php echo $row['con_lname']; ?></td>
                                    <td>
                                      <img src="<?php echo str_replace("190x190","190x190",$row['con_qr_image']); ?>">
                                    </td>
                                    <td>
                                      <a href="generate-qr-code.php?action=edit&con_id=<?php echo $row['con_id']; ?>" class="label label-warning">Edit</a> | 
                                      <a href="?action=delete&con_id=<?php echo $row['con_id']; ?>" onclick="return confirm('Are you sure, \n Do you want to delete this record?');" class="label label-danger">Delete</a>
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
