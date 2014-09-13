<?php
	class Contact {
		function con_fname ($con_fname) {
			return $con_fname;
		}
		function con_lname ($con_lname) {
			return $con_lname;
		}
		function con_com_name ($con_com_name) {
			return $con_com_name;
		}
		function con_title ($con_title) {
			return $con_title;
		}
		function con_phone ($con_phone) {
			return $con_phone;
		}
		function con_email ($con_email) {
			return $con_email;
		}
		function con_url ($con_url) {
			return $con_url;
		}
		function con_street_name ($con_street_name) {
			return $con_street_name;
		}
		function con_city ($con_city) {
			return $con_city;
		}
		function con_state_name ($con_state_name) {
			return $con_state_name;
		}
		function con_postal_code ($con_postal_code) {
			return $con_postal_code;
		}
		function con_country ($con_country) {
			return $con_country;
		}
		function con_note ($con_note) {
			return $con_note;
		}
		function con_qr_image ($con_qr_image) {
			return $con_qr_image;
		}
		function user_id ($user_id) {
			return $user_id;
		}

		function save() {

			$con_fname		 		= $this->con_fname;
			$con_lname 		 		= $this->con_lname;
			$con_com_name 	 	= $this->con_com_name;
			$con_title		 		= $this->con_title;
			$con_phone 		 		= $this->con_phone;
			$con_email 	 			= $this->con_email;
			$con_url		 			= $this->con_url;
			$con_street_name	= $this->con_street_name;

			$con_city 	 			= $this->con_city;
			$con_state_name		= $this->con_state_name;
			$con_postal_code 	= $this->con_postal_code;
			$con_country 	 		= $this->con_country;
			$con_note		 			= $this->con_note;
			$con_qr_image 		= $this->con_qr_image;
			$user_id 	 				= $this->user_id;

			$stmt = sprintf(CONTACT_SQL_INSERT, $con_fname, 
				$con_lname, $con_com_name, $con_title, $con_phone, $con_email, $con_url, $con_street_name, $con_city, $con_state_name
				, $con_postal_code, $con_country, $con_note, $con_qr_image, $user_id);

			return mysql_query($stmt);
		}
		function update() {
			$con_id 					= $this->con_id;
			$con_fname		 		= $this->con_fname;
			$con_lname 		 		= $this->con_lname;
			$con_com_name 	 	= $this->con_com_name;
			$con_title		 		= $this->con_title;
			$con_phone 		 		= $this->con_phone;
			$con_email 	 			= $this->con_email;
			$con_url		 			= $this->con_url;
			$con_street_name	= $this->con_street_name;

			$con_city 	 			= $this->con_city;
			$con_state_name		= $this->con_state_name;
			$con_postal_code 	= $this->con_postal_code;
			$con_country 	 		= $this->con_country;
			$con_note		 			= $this->con_note;
			$con_qr_image 		= $this->con_qr_image;
			$user_id 	 				= $this->user_id;

			$stmt 	 = sprintf(CONTACT_SQL_UPDATE, $con_fname, $con_lname, $con_com_name, $con_title, $con_phone, $con_email, 
				$con_url, $con_street_name, $con_city, $con_state_name, $con_postal_code, $con_country, $con_note, $con_qr_image, 
				$user_id, $con_id);

			return mysql_query($stmt);
		}
		function upsert() {

		}
		function delete() {
			$con_id = $this->con_id;

			$stmt 	 = sprintf(CONTACT_SQL_DELETE, $con_id);

			return mysql_query($stmt);
		}
		// [x] basic info
		// save map, logo
		// update
		// delete
	}
?>