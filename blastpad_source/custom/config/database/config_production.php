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
 * PRODUCTION SERVER
 * Advanced configuration for production server.
 *
 */ 
	$blastpad_config[ "database_connection" ][ "production" ] = [
		"database_driver" 	=> "mysql",
		"server" 			=> "127.0.0.1",
		"port"				=> "",
		"database" 			=> "putdatabasenamehere",
		"username" 			=> "putusernamehere",
		"password" 			=> "putpasswordhere",
		"charset"			=> "utf8mb4",											// For mysql, pgsql only.
		"collation"			=> "utf8mb4_unicode_ci",								// For mysql only.
		"strict"			=> false,												// For mysql only.
		"schema"			=> "public",											// For pgsql only.
		"options"			=> [ \PDO::ATTR_ERRMODE => \PDO::ERRMODE_SILENT ],  	// Database error mode.
	];

?>