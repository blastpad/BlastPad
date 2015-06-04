<?php

	// Create a database connection using PDO.
	function connect_to_database() {
		$server_environment = "production";
		
		require_once( dirname(__FILE__) . "../../../../../../../custom/config.php" );
			
		try {
			$data_source_name = $database_connection[ $server_environment ][ "database_driver" ] . ":host=" . 
				$database_connection[ $server_environment ][ "server" ] . ";" . 
				"dbname=" . $database_connection[ $server_environment ][ "database" ];
			$conn = new PDO( $data_source_name,
				$database_connection[ $server_environment ][ "username" ], 
				$database_connection[ $server_environment ][ "password" ] );
				
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

			return $conn;
			
		} catch( PDOException $e ) {
			echo "Please setup your database first.  Please see the file README.md to find out how.";
			//echo 'ERROR: ' . $e->getMessage();
			exit;
		}
		
		
	}
?>