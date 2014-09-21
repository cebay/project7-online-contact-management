<?php
	class User {
		function user_id ($user_id) {
			return $user_id;
		}
		function user_name ($user_name) {
			return $user_name;
		}
		function user_password ($user_password) {
			return $user_password;
		}
		function user_type ($user_type) {
			return $user_type;
		}
		function user_contact_num ($user_contact_num) {
			return $user_contact_num;
		}
		function user_expired_date ($user_expired_date) {
			return $user_expired_date;
		}
		function user_status ($user_status) {
			return $user_status;
		}

		function save() {

			$user_name		 			= $this->user_name;
			$user_password 		 	= $this->user_password;
			$user_type 	 				= $this->user_type;
			$user_contact_num		= $this->user_contact_num;
			$user_expired_date 	= $this->user_expired_date;
			$user_status 	 			= $this->user_status;

			$stmt = sprintf(USER_SQL_INSERT, $user_name, $user_password, $user_type, $user_contact_num, 
				$user_expired_date, $user_status);

			$resource = mysql_query($stmt);

			// insert data to authorize table.
			$insert_id = mysql_insert_id();
			$stmt_auth = sprintf(AUTHORIZE_SQL_INSERT, $insert_id);
			mysql_query($stmt_auth);

			return $resource;
		}
		function update() {
			$user_id 						= $this->user_id;
			$user_name		 			= $this->user_name;
			$user_password 		 	= $this->user_password;
			$user_type 	 				= $this->user_type;
			$user_contact_num		= $this->user_contact_num;
			$user_expired_date 	= $this->user_expired_date;
			$user_status 	 			= $this->user_status;

			$stmt 	 = sprintf(USER_SQL_UPDATE, $user_name, $user_password, $user_type, $user_contact_num, 
				$user_expired_date, $user_status, $user_id);

			return mysql_query($stmt);
		}
		function manage_status() {
			$user_id 			= $this->user_id;
			$user_status 	= $this->user_status;
			$stmt 	 			= sprintf(USER_SQL_UPDATE_STATUS, $user_status, $user_id);

			return mysql_query($stmt);
		}
		function delete() {
			$user_id = $this->user_id;
			$stmt 	 = sprintf(USER_SQL_DELETE, $user_id);

			return mysql_query($stmt);
		}
		function find_user($field, $table, $condition) {
			$stmt	 = sprintf(FIND_USER, $field, $table, $condition);
			
			$query 	 = mysql_query($stmt);
			$record = mysql_fetch_assoc($query);

			return $record;
		}

		function get_user_type($user_type) {
			$type = 'Free';
			switch($user_type) {
	      case 21:
	              $type = 'Gold';
	              break;
	      case 22:
	              $type = 'Silver';
	              break;
	      case 23:
	              $type = 'Diamond';
	              break;
	    }

			return $type;
		}
	}
?>