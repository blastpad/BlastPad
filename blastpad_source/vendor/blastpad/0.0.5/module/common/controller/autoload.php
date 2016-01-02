<?php

// Check if file exists first before including.
function include_file( $include_file ) {
	if ( file_exists( $include_file ) ) {	
		try {
			include_once( $include_file );
			//debug_print_backtrace();			
		} catch ( Exception $e ) {
			echo "<p>There was a problem including " . $include_file . "</p>";
			//echo $include_file;		
		}
	}
}

// Require file.
function require_file( $required_file ) {
	try {
		require_once( $required_file );		
	} catch ( Exception $e ) {
		echo "<p>There was a problem including " . $blastpad_config[ "path" ][ "root" ] . $required_file . "</p>";	
	}
} 

function autoloader( $class_name ){
	global $blastpad_config;

	// Class directories.
	$directory = array(
		"blastpad",
		"common",
		"database",
		"form",
		"security",
		"authentication",
	);
	
	// Go through each directory to find the class.
	foreach( $directory as $path ) {	
		include_file ( $blastpad_config[ "path" ][ "module" ] . $path . "/controller/" . $class_name . ".php" );
		include_file ( $blastpad_config[ "path" ][ "module" ] . $path . "/model/" . str_replace( "_model", "", $class_name ) . ".php" );
	}
}

spl_autoload_register( "autoloader" );
?>