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
 * (The database connection details for the standard server are at the custom/config.php file.)
 */

/**
 *
 * STANDARD SERVER
 * Advanced configuration for standard server.
 *
 */ 
	$blastpad_config[ "database_connection" ][ "standard" ][ "charset" ] 						= "utf8mb4";				// For mysql, pgsql only.
	$blastpad_config[ "database_connection" ][ "standard" ][ "collation" ] 						= "utf8mb4_unicode_ci";		// For mysql only.
	$blastpad_config[ "database_connection" ][ "standard" ][ "strict" ] 						= false;					// For mysql only.
	$blastpad_config[ "database_connection" ][ "standard" ][ "schema" ] 						= "public";					// For pgsql only.
	$blastpad_config[ "database_connection" ][ "standard" ][ "options" ][ \PDO::ATTR_ERRMODE ] 	= \PDO::ERRMODE_SILENT; 	// Database error mode.
?>