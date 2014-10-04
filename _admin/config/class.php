<?php
	// members IS440: radin, chor, channa.
	session_start();

	// echo $current_page; exit(0);
	$redirect_uri = ($current_page == 'root') ? '../_admin/login' : '../login';
	if($current_page != 'login' && $current_page != 'signup' && $_GET['action'] != 'signup') {
		if($_SESSION['user_id'] == '') {
			header('location: ' . $redirect_uri);
		}
	}
	
	if($_GET['action'] == 'logout') {
		unset($_SESSION['user_id']);
		header('location: ' . $redirect_uri);
	}

	require("sql.php");

	function __autoload($class_name) {
		include $class_name . '.php';
	}
	$opr = new Operation;
	$opr->contact 	= new Contact;
	$opr->user 			= new User;
	$opr->authorize	= new Authorize;
?>