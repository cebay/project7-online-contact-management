<?php $path = (($current_page != "root") ? "../" : ""); ?>

<ul class="nav nav-stacked" id="sidebar">
    <li><a href="<?php echo $path.'home'; ?>"><span class="glyphicon glyphicon-home"></span> &nbsp; QR code</a></li>
    <li><a href="<?php echo $path.'about-us'; ?>"><span class="glyphicon glyphicon-user"></span> &nbsp; Manage member</a></li>
    <li><a href="<?php echo $path.'tour'; ?>"><span class="glyphicon glyphicon-globe"></span> &nbsp; Report</a></li>
    <li><a href="<?php echo $path.'gallery'; ?>"><span class="glyphicon glyphicon-picture"></span> &nbsp; Authorize</a></li>
</ul>