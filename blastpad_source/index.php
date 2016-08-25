<?php 

	global $blastpad;

	// Set root directory.
	$blastpad[ "path" ][ "root" ] = dirname(__DIR__);
	
	// Set blastpad_source directory.
	$blastpad[ "path" ][ "source" ] = dirname( __FILE__ ) . "/";

	// Set current version of blastpad_source.
	$blastpad[ "path" ][ "source_version" ] = "0.1.0";
	require_once ( $blastpad[ "path" ][ "source" ] . $blastpad[ "path" ][ "source_version" ] . "/index.php" );
?>