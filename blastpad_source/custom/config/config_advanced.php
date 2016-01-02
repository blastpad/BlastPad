<?php
/**
 * 
 * Advanced configuration details for your server.
 *
 */
 
/**
 *
 * Specify the name of the server environment here. 
 * Acceptable values are "standard", "production", "testing", "development". 
 * You can also create your own custom environment, just create a new file with a "config_" prefix with login details in the custom/config/database directory.)
 */
	$blastpad_config[ "server_environment" ] = "standard"; 			// Default is "standard"
	
/**
 *
 * ERROR REPORTING
 * Possible values include:
 * 		0 									// Turns off all error reporting.
 * 		E_ERROR | E_WARNING | E_PARSE 		// Report simple running errors.
 *		E_ALL 								// Report all PHP errors.
 */

	$blastpad_config[ "production" ][ "error_reporting" ] 	= 0;
	$blastpad_config[ "testing" ][ "error_reporting" ] 		= E_ALL;
	$blastpad_config[ "development" ][ "error_reporting" ] 	= E_ALL;
	$blastpad_config[ "standard" ][ "error_reporting" ] 	= E_ALL;

/**
 *
 * DIRECTORIES
 * Set the name of the directories here if you want to change the default.
 *
 */ 
	$blastpad_config[ "path" ][ "blueprint" ] = $blastpad_config[ "path" ][ "root" ] . "asset/blueprint/";									// Blueprint directory.
	$blastpad_config[ "path" ][ "source" ] = $blastpad_config[ "path" ][ "root" ] . "../blastpad_source/";									// Source directory.
	$blastpad_config[ "path" ][ "custom" ] = $blastpad_config[ "path" ][ "source" ] . "custom/";											// Custom directory.
	$blastpad_config[ "path" ][ "module" ] = $blastpad_config[ "path" ][ "source" ] . "vendor/blastpad/" . $blastpad_version . "/module/";	// Module directory.
	
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