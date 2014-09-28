<?php $path = (($current_page != "root") ? "../" : ""); ?>

<?php
	// require("../config/class.php");
	// $users = $opr->find_records('*', TBL_AUTHORIZE, 'user_id = ' . $_SESSION['user_id']);
	// $auth_user = mysql_fetch_assoc($users);
?>
<ul class="nav nav-stacked" id="sidebar">
    <li>
    	<a href="<?php echo $path.'qr-code'; ?>">
    		<span class="glyphicon glyphicon-home"></span> &nbsp; Contacts
    	</a>
    </li>
    <?php
    	if(1) {
    		?>
    			<li>
    				<a href="<?php echo $path.'manage-member'; ?>">
    					<span class="glyphicon glyphicon-user"></span> &nbsp; Manage member
    				</a>
    			</li>
    		<?php
    	}
    ?>
    <?php
    	if(1) {
    		?>
    			<li>
    				<a href="<?php echo $path.'report'; ?>">
    					<span class="glyphicon glyphicon-globe"></span> &nbsp; Report
    				</a>
    			</li>
    		<?php
    	}
    ?>
    <li>
    	<a href="<?php echo $path.'authorize'; ?>">
    		<span class="glyphicon glyphicon-picture"></span> &nbsp; Authorize
    	</a>
    </li>
</ul>