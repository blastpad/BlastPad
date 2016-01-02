<?php

/** 
 *
 * This is the main file that loads BlastPad.  
 * 	
 */
	// Set the active version.
	$blastpad_version = "0.0.5";
	
	// Sets this folder as the root directory.
	$blastpad_config[ "path" ][ "root" ] = dirname(__FILE__) . "/";
	
	// Loads BlastPad and settings.
	require_once( $blastpad_config[ "path" ][ "root" ] . "../blastpad_source/index.php" );
?>