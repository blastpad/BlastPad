<?php

	// Create a database connection using PDO.
	function connect_to_database() {
		
		require_once( dirname(__FILE__) . "../../../../config.php" );
			
		try {
			$data_source_name = $database_connection[ $environment ][ "database_driver" ] . ":host=" . 
				$database_connection[ $environment ][ "server" ] . ";" . 
				"dbname=" . $database_connection[ $environment ][ "database" ];
			$conn = new PDO( $data_source_name,
				$database_connection[ $environment ][ "username" ], 
				$database_connection[ $environment ][ "password" ] );
				
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

			return $conn;
			
		} catch( PDOException $e ) {
			echo "Please setup your database first.  Please see the file README.md to find out how.";
			exit;
			//echo 'ERROR: ' . $e->getMessage();
		}
		
		
	}
?>