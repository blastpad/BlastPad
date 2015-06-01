<?php

/**
 * 
 * Advanced configuration details for your server.
 *
 */
 
/**
 *
 * Specify the name of the environment here.  
 * The default is "production".  Other acceptable values are "testing", "development" or you can create your own.
 * (Database login details are in the src/database directory.)
 */
	$server_environment = "production";	
	
/**
 *
 * ERROR REPORTING
 * Possible values include:
 * 		0 									// Turns off all error reporting.
 * 		E_ERROR | E_WARNING | E_PARSE 		// Report simple running errors.
 *		E_ALL 								// Report all PHP errors.
 */

	$config[ "production" ][ "error_reporting" ] 	= 0;
	$config[ "testing" ][ "error_reporting" ] 		= E_ALL;
	$config[ "development" ][ "error_reporting" ] 	= E_ALL;

/**
 *
 * DIRECTORIES
 * Set the name of the directories here if you want to change the default.
 *
 */

	define( "public_folder", 		"public" );											// The public folder.  Default is "public".
	define( "dashboard",			"dashboard" );										// The admin dashboard folder.  Default is "dashboard".
	define( "src_folder", 			"src" );											// The source folder.  Default is "src".
	define( "custom_folder", 		"custom" ); 										// The default is "custom".
	
	define( "blastpad_path", src_folder . "/library/blastpad/blastpad/module/blastpad_cms/master" ); // Path to the main BlastPad directory.
	define( "blastpad_module_path", src_folder . "/library/blastpad/blastpad/module" ); 			 // Path to the BlastPad modules.	
	
/**
 *
 * ASSERT
 * Possible values include:
 *		ASSERT_ACTIVE			// Enable assert() evaluation.
 *		ASSERT_BAIL				// Terminate script execution on failed assertions.
 *		ASSERT_WARNING			// Issue a PHP warning for each failed assertion.
 *		ASSERT_CALLBACK			// User function to call on failed assertions.
 *		ASSERT_QUIET_EVAL		// No errors are shown while evaluation.
 * 
 */

?>