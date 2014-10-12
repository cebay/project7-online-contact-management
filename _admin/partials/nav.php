<?php

	$path = (($current_page != "root") ? "../" : ""); 

	require_once($path . 'config/class.php');
	$users = $opr->find_records('*', TBL_AUTHORIZE, 'user_id = ' . $_SESSION['user_id']);
	$auth_user = mysql_fetch_array($users);
?>

<ul class="nav nav-stacked" id="sidebar">
    <li>
    	<a class="<?php echo ($current_page=='qr-code') ? 'active-admin' : ''?>" href="<?php echo $path.'qr-code'; ?>">
    		<span class="glyphicon glyphicon-home"></span> &nbsp; Contacts
    	</a>
    </li>
    <?php
    	if($auth_user['aut_manage_user'] == 1) {
    		?>
    			<li>
    				<a class="<?php echo ($current_page=='manage-member') ? 'active-admin' : ''?>" href="<?php echo $path.'manage-member'; ?>">
    					<span class="glyphicon glyphicon-user"></span> &nbsp; Manage member
    				</a>
    			</li>
    		<?php
    	}
    ?>
    <?php
    	if($auth_user['aut_view_report'] == 1) {
    		?>
    			<li>
    				<a class="<?php echo ($current_page=='report') ? 'active-admin' : ''?>" href="<?php echo $path.'report'; ?>">
    					<span class="glyphicon glyphicon-globe"></span> &nbsp; Report
    				</a>
    			</li>
    		<?php
    	}
    ?>
    <li>
    	<a class="<?php echo ($current_page=='authorize') ? 'active-admin' : ''?>" href="<?php echo $path.'authorize'; ?>">
    		<span class="glyphicon glyphicon-picture"></span> &nbsp; Authorize
    	</a>
    </li>
</ul>