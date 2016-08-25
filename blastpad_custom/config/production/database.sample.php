<?php
	// Database connection details.
	// Please enter your database login details here.

	$blastpad[ "config" ][ "database_connection" ] = [	
		"username" 			=> "root",			// Enter your database username here.
		"password" 			=> "",				// Enter your database password here.
		"database" 			=> "blastpad",		// Enter your database name here.
		
		// Advanced details.
		"host" 				=> "127.0.0.1",
		"prefix" 			=> "bp_",
		"database_driver" 	=> "mysql",
		"port"				=> "",
		"charset"			=> "utf8mb4",											// For mysql, pgsql only.
		"collation"			=> "utf8mb4_unicode_ci",								// For mysql only.
		"strict"			=> false,												// For mysql only.
		"schema"			=> "public",											// For pgsql only.
		"options"			=> [ \PDO::ATTR_ERRMODE => \PDO::ERRMODE_SILENT ],  	// Database error mode.
	];
?>	
