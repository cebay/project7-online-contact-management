<?php
	class Authorize {
		function aut_id ($aut_id) {
			return $aut_id;
		}
		function user_id ($user_id) {
			return $user_id;
		}
		function aut_manage_user ($aut_manage_user) {
			return $aut_manage_user;
		}
		function aut_view_report ($aut_view_report) {
			return $aut_view_report;
		}

		
		function update() {
			$aut_id 					= $this->aut_id;
			$aut_manage_user 	= $this->aut_manage_user;
			$aut_view_report 	= $this->aut_view_report;

			$stmt 	 = sprintf(AUTHORIZE_SQL_UPDATE, $aut_manage_user, $aut_view_report, $aut_id);
			
			return mysql_query($stmt);
		}
		function delete() {
			$user_id = $this->user_id;
			$stmt 	 = sprintf(USER_SQL_DELETE, $user_id);

			return mysql_query($stmt);
		}
	}
?>