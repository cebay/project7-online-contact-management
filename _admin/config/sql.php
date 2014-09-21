<?php
	require("define.php");

	define("CONTACT_SQL_INSERT",
				"INSERT INTO " . TBL_CONTACT . "(
					`con_id`, 
					`con_fname`, 
					`con_lname`, 
					`con_com_name`, 
					`con_title`, 
					`con_phone`, 
					`con_email`, 
					`con_url`, 
					`con_street_name`, 
					`con_city`, 
					`con_state_name`, 
					`con_postal_code`, 
					`con_country`, 
					`con_note`, 
					`con_qr_image`, 
					`user_id`) VALUES ('','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',%u)");
	
	define('CONTACT_SQL_DELETE',
			"DELETE FROM " . TBL_CONTACT . " WHERE con_id = %u");

	define('CONTACT_SQL_UPDATE',
			"UPDATE " . TBL_CONTACT . " SET 
			`con_fname`				='%s',
			`con_lname`				='%s',
			`con_com_name`		='%s',
			`con_title`				='%s',
			`con_phone`				='%s',
			`con_email`				='%s',
			`con_url`					='%s',
			`con_street_name`	='%s',
			`con_city`				='%s',
			`con_state_name`	='%s',
			`con_postal_code`	='%s',
			`con_country`			='%s',
			`con_note`				='%s',
			`con_qr_image`		='%s',
			`user_id`					= %u 
			WHERE con_id = %u");

	define('FIND_RECORD',
			"SELECT %s FROM %s WHERE con_id = %u");

	define('FIND_RECORDS',
			"SELECT %s FROM %s WHERE %s");

	define('FIND_USER',
			"SELECT %s FROM %s WHERE user_id = %u");
	
	define('SELECT_RECORDS', 
			"SELECT %s FROM %s");

	define('USER_SQL_INSERT',
			"INSERT INTO " . TBL_USER . "(
				`user_id`, 
				`user_name`, 
				`user_password`, 
				`user_type`, 
				`user_contact_num`, 
				`user_expired_date`, 
				`user_status`) VALUES ('','%s','%s',%u,%u,'%s',%u)");

	define('USER_SQL_UPDATE',
			"UPDATE " . TBL_USER . " SET 
			`user_name`					= '%s',
			`user_password`			= '%s',
			`user_type`					= %u,
			`user_contact_num`	= %u,
			`user_expired_date`	= '%s',
			`user_status`				= %u
			WHERE user_id = %u");

	define('USER_SQL_UPDATE_STATUS',
			"UPDATE " . TBL_USER . " SET 
			`user_status`				= %u
			WHERE user_id = %u");

	define('USER_SQL_DELETE',
			"DELETE FROM " . TBL_USER . " WHERE user_id = %u");

	define("AUTHORIZE_SQL_INSERT",
			"INSERT INTO " . TBL_AUTHORIZE . "(
				`aut_id`, 
				`user_id`, 
				`aut_manage_user`, 
				`aut_view_report`) VALUES ('',%u,0,0)");

	define("AUTHORIZE_SQL_UPDATE",
			"UPDATE " . TBL_AUTHORIZE . " SET 
			`aut_manage_user`= %u,
			`aut_view_report`= %u WHERE user_id = %u");

	define("AUTHORIZE_SQL_UPDATE",
			"DELETE FROM " . TBL_AUTHORIZE . " WHERE user_id = %u");
?>