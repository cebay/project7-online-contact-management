<?php
	// members IS440: radin, chor, channa.
	// session_start();

	// if($_SESSION['user_id'] == '') {
	// 	header('location: ../_admin/login');
	// }

	require("sql.php");

	function __autoload($class_name) {
		include $class_name . '.php';
	}
	$opr = new Operation;
	$opr->contact 	= new Contact;
	$opr->user 			= new User;
	$opr->authorize	= new Authorize;
?>