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
 * (The database connection details for the production server are at the custom/config.php file.)
 */

/**
 *
 * PRODUCTION SERVER
 * Advanced configuration for production server.
 *
 */ 
	$database_connection[ "production" ][ "table_prefix" ] 	= "";
	$database_connection[ "production" ][ "charset" ] 		= "utf8mb4";							// For mysql, pgsql only.
	$database_connection[ "production" ][ "collation" ] 	= "utf8mb4_unicode_ci";					// For mysql only.
	$database_connection[ "production" ][ "strict" ] 		= false;								// For mysql only.
	$database_connection[ "production" ][ "schema" ] 		= "public";								// For pgsql only.
	$database_connection[ "production" ][ "options" ][ \PDO::ATTR_ERRMODE ] = \PDO::ERRMODE_SILENT; // Database error mode.
	
?>