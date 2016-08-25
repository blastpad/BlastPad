<?php 

	$blastpad[ "database" ] = blastpad_get_database_connection();
	
	if ( $blastpad[ "database" ] ){
		require_once ( $blastpad[ "path" ][ "module" ] . "site/dynamic_site.php" );
		blastpad_get_dynamic_site();
	} else {
		require_once ( $blastpad[ "path" ][ "module" ] . "site/static_site.php" );
		blastpad_get_static_site();
	}

	function blastpad_get_database_connection(){
		global $blastpad;
		
		$data_source_name = "mysql:host=" . $blastpad[ "config" ][ "database_connection" ][ "host" ] . ";dbname=" . $blastpad[ "config" ][ "database_connection" ][ "database" ];
		
		try {
			$database_connection = new PDO( $data_source_name, $blastpad[ "config" ][ "database_connection" ][ "username" ], $blastpad[ "config" ][ "database_connection" ][ "password" ]);
			return $database_connection;
			
		} catch ( PDOException $e ) {
			print( "There was a problem connecting to the database.  Please try again later.<br />" );
			//If you own this site, please check your error logs for more details about what went wrong." );
			//error_log( "Database connection error: " . $e->getMessage() . "\n " );
			//die();
		}	
	}
?>