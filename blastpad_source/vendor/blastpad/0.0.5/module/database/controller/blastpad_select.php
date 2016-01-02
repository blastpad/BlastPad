<?php

/**
 * SQL select.
 *
 */

class blastpad_select{
 
	function build_select_all_sql( $table, $option = "" ) {
		
		$sql = "select ";
		$sql .= implode(", ", array_values( $option[ "column_array" ] ) );
		$sql .= " from " . $table;
		return $sql;
		
	}
 
	// To change:
	function build_select_sql( $table, $unique_array ) {
		$sql = "select ";
		//extract column names from the keys
        $sql .= sanitize ( implode(", ", array_keys( $unique_array ) ) );
		$sql .= " from " . sanitize ( $table ) . "
			where LOWER( ";
		foreach ( $unique_array as $key => $value) {	
			$sql .=  sanitize ( $key ) . " ) = :" . $key;
		}	

		$sql .= " limit 1";

		return $sql;
	}

	function build_check_unique_sql( $table, $unique_array ) {
		$sql = "select count(";
		foreach ( $unique_array as $key => $value) {	
			$sql .= sanitize ( $key );
			
		}	
		$sql .= ") as count from " . sanitize ( $table ) . "
			where LOWER( ";
		foreach ( $unique_array as $key => $value) {	
			$sql .=  sanitize ( $key ) . " ) = :" . $key;
		}	

		$sql .= " limit 1";

		return $sql;
	}	
}
?>


