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
 * 
 */
 
/**
 * 
 * DEVELOPMENT SERVER
 * Configuration details for development server.
 *
 */
		$blastpad_config[ "database_connection" ][ "development" ] = [
			"database_driver" 	=> "mysql",
			"server" 			=> "127.0.0.1",
			"port"				=> "",
			"database" 			=> "blastpad",
			"username" 			=> "root",
			"password" 			=> "",
			"table_prefix" 		=> "",
			"charset"			=> "utf8mb4",											// For mysql, pgsql only.
			"collation"			=> "utf8mb4_unicode_ci",								// For mysql only.
			"strict"			=> false,												// For mysql only.
			"schema"			=> "public",											// For pgsql only.
			"options"			=> [ \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION ],  	// Database error mode.
		];
	
?>