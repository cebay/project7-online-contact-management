<?php
	require("Connection.php");

	Class Operation extends Connection {
		public $contact;

		function __construct() {
			$conn = new Connection;
		}

		function find_record($field, $table, $condition) {
			$stmt	 = sprintf(FIND_RECORD, $field, $table, $condition);
			
			$query 	 = mysql_query($stmt);
			$record = mysql_fetch_assoc($query);

			return $record;
		}

		function select_records($field, $table) {
			$stmt	 = sprintf(SELECT_RECORDS, $field, $table);
			$query 	 = mysql_query($stmt);

			return $query;
		}
	}
?>