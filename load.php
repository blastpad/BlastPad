<?php 

/**
 * 
 * Loader.
 *
 */

	define ( "root_directory", dirname(__FILE__) . "/" ); 
	
	// Load the configuration settings.
	require_once( root_directory . "custom/config/config_advanced.php" );

	// Loads all the things.
	require_once( root_directory . blastpad_module_path . "/common/load/load_main.php" );
	
?>