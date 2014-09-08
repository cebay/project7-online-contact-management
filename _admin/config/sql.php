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
?>