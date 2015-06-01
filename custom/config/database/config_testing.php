<?php

/**
 * 
 * Advanced configuration details for your server.
 *
 */

/**
 *
 * DATABASE
 * Database connection details.  Please enter your database login details here.
 * (The database connection details for the production server are at the config.php file at the top directory.)
 */
 
/**
 *
 * TESTING SERVER
 * Configuration details for testing server.
 *
 */
	if ( $server_environment == "development" ) {
		$database_connection[ "testing" ] = [
			"database_driver" 	=> "mysql",
			"server" 			=> "127.0.0.1",
			"port"				=> "3307",
			"database" 			=> "putdatabasenamehere",
			"username" 			=> "putusernamehere",
			"password" 			=> "putpasswordhere",
			"table_prefix" 		=> "",
			"charset"			=> "utf8mb4",												// For mysql, pgsql only.
			"collation"			=> "utf8mb4_unicode_ci",									// For mysql only.
			"strict"			=> false,												// For mysql only.
			"schema"			=> "public",											// For pgsql only.
			"options"			=> [ \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION ],	// Database error mode.
		];
	}	

?>