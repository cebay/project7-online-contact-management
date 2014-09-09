<?php $path = (($current_page != "root") ? "../" : ""); ?>

<ul class="nav nav-stacked" id="sidebar">
    <li><a href="<?php echo $path.'qr-code'; ?>"><span class="glyphicon glyphicon-home"></span> &nbsp; Contacts</a></li>
    <li><a href="<?php echo $path.'manage-member'; ?>"><span class="glyphicon glyphicon-user"></span> &nbsp; Manage member</a></li>
    <li><a href="<?php echo $path.'report'; ?>"><span class="glyphicon glyphicon-globe"></span> &nbsp; Report</a></li>
    <li><a href="<?php echo $path.'authorize'; ?>"><span class="glyphicon glyphicon-picture"></span> &nbsp; Authorize</a></li>
</ul>