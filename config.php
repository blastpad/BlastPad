<?php

/**
 * 
 * Configuration details for your server.
 *
 */
 
/**
 *
 * Specify the name of the environment here.  
 * The default is "production".  Other acceptable values are "testing", "development" or you can create your own.
 *
 */
	$environment = "production";
	
/**
 *
 * Database connection details.  Please enter your database login details here.
 *
 */
	$database_connection = [

		"production" => [
			"database_driver" 	=> "mysql",
			"server" 			=> "localhost",
			"database" 			=> "putdatabasenamehere",
			"username" 			=> "putusernamehere",
			"password" 			=> "putpasswordhere",
			"table_prefix" 		=> "",
			"charset"			=> "utf8",					// For mysql, pgsql only.
			"collation"			=> "utf8_unicode_ci",		// For mysql only.
			"strict"			=> false,					// For mysql only.
			"schema"			=> "public"					// For pgsql only.
		],
		
		"testing" => [
			"database_driver" 	=> "mysql",
			"server" 			=> "localhost",
			"database" 			=> "putdatabasenamehere",
			"username" 			=> "putusernamehere",
			"password" 			=> "putpasswordhere",
			"table_prefix" 		=> "",
			"charset"			=> "utf8",					// For mysql, pgsql only.
			"collation"			=> "utf8_unicode_ci",		// For mysql only.
			"strict"			=> false,					// For mysql only.
			"schema"			=> "public"					// For pgsql only.
		],
		
		"development" => [
			"database_driver" 	=> "mysql",
			"server" 			=> "localhost",
			"database" 			=> "putdatabasenamehere",
			"username" 			=> "putusernamehere",
			"password" 			=> "putpasswordhere",
			"table_prefix" 		=> "",
			"charset"			=> "utf8",					// For mysql, pgsql only.
			"collation"			=> "utf8_unicode_ci",		// For mysql only.
			"strict"			=> false,					// For mysql only.
			"schema"			=> "public"					// For pgsql only.
		],
		
	];
	
?>