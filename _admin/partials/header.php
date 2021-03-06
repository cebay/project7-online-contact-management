<?php 
    $path = (($current_page != "root") ? "../" : ""); 

    require_once($path . 'config/class.php');
    $users = $opr->find_records('*', TBL_USER, 'user_id = ' . $_SESSION['user_id']);
    $auth_user = mysql_fetch_assoc($users);
?>

<nav class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    
    <div class="navbar-header">
        <a href="<?php echo $path; ?>">
            <img width="60" src="<?php echo $path; ?>../images/logo.png" id="logo" class="pull-left">
        </a>
        <a href="../" class="navbar-brand" id="listing-name"> Online Contact Management </a>
        <?php 
            if(isset($_SESSION['user_id'])) {
        ?>
        <ul class="nav nav-tabs pull-right visible-xs">
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $auth_user['user_name']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span>&emsp;Logout</a></li>
            </ul>
            </li>
        </ul>
        <?php
        }
        ?>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
        <?php 
            if(isset($_SESSION['user_id'])) {
        ?>
        <ul class="nav nav-tabs pull-right nav-config">
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $auth_user['user_name']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span>&emsp;Logout</a></li>
            </ul>
            </li>
        </ul>
        <?php
            }
        ?>
    </nav>
    
  </div>
</nav>
