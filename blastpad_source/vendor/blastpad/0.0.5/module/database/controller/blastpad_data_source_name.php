<?php
/**
 *
 * Data Source Name class.
 *
 */

class blastpad_data_source_name {
	
/**
 *
 * Creates the DSN (data source name).
 *
 */	
 
	private $dsn;
 
	// Create data source name.
	function __construct( $db, $server ){
		
		$this -> dsn = $db[ $server ][ "database_driver" ] . 
				":host=" . $db[ $server ][ "server" ] . ";";
		
		if ( isset ( $db[ $server ][ "port" ] ) ){	
			$this -> dsn .=	"port=" . $db[ $server ][ "port" ] . ";";
		}
		
		$this -> dsn .=	"dbname=" . $db[ $server ][ "database" ] . ";";
		
		if ( isset ( $db[ $server ][ "charset" ] ) ){	
			$this -> dsn .=	"charset=" . $db[ $server ][ "charset" ] . ";";
		} else {
			$this -> dsn .=	"charset=utf8;";
		}
		
	}
	
	function get_dsn(){
		return $this-> dsn;
	}
	
}	
?>