<?php
	require("Connection.php");

	Class Operation extends Connection {
		public $contact;
		public $user;

		function __construct() {
			$conn = new Connection;
		}

		function find_record($field, $table, $condition) {
			$stmt	 = sprintf(FIND_RECORD, $field, $table, $condition);
			
			$query 	 = mysql_query($stmt);
			$record = mysql_fetch_assoc($query);

			return $record;
		}

		function find_records($field, $table, $condition) {
			$stmt	 = sprintf(FIND_RECORDS, $field, $table, $condition);
			
			$record 	 = mysql_query($stmt);
			return $record;
		}

		function select_records($field, $table) {
			$stmt	 = sprintf(SELECT_RECORDS, $field, $table);
			$query 	 = mysql_query($stmt);

			return $query;
		}

		function add_date($orgDate,$mth){
		  $cd = strtotime($orgDate);
		  $retDAY = date('Y-m-d', mktime(0,0,0,date('m',$cd)+$mth,date('d',$cd),date('Y',$cd)));
		  return $retDAY;
		}
	}
?>