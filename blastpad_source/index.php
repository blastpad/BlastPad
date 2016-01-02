<?php 

/**
 * 
 * Loader.
 *
 */

	// Loads the configuration settings.
	require_once( "custom/config/config_advanced.php" );

	// Loads all the things.
	require_once( $blastpad_config[ "path" ][ "module" ] . "blastpad/controller/blastpad.php" );
	$blastpad = new blastpad();
?>