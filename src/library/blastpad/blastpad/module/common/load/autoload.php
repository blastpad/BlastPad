<?php

// Check if file exists first before including.
function include_file( $include_file ) {
	
	$root_directory = defined( "root_directory" ) ? root_directory : "";
	//echo $root_directory . $include_file . "<br>";
	if ( file_exists( $root_directory . $include_file ) ) {	
		try {

			require_once( $root_directory . $include_file );
			//debug_print_backtrace();			
		} catch ( Exception $e ) {
			echo "<p>There was a problem including " . $include_file . "</p>";
			//echo $include_file;		
		}
	}
}

// Require file.
function require_file( $required_file ) {
	$root_directory = defined( "root_directory" ) ? root_directory : "";
	
	try {
		//echo $root_directory . $required_file;
		require_once( $root_directory . $required_file );		
	} catch ( Exception $e ) {
		echo "<p>There was a problem including " . $root_directory . $required_file . "</p>";	
	}

}

function autoloader( $class_name ){
	$blastpad_module_path = defined( "blastpad_module_path" ) ? blastpad_module_path : "";
	
	// Get just the class name.
	$class_name = end( explode( "\\", $class_name ) );
	
	// Class directories.
	$directory = [
		"blastpad_cms",
		"common",
		"calliope_database",
		"zigzag_routing",
		"snowflake_authentication",
	];
	
	// Go through each directory to find the class.
	foreach( $directory as $dir ) {	
		include_file ( $blastpad_module_path . "/" . $dir . "/class/" . $class_name  . "_class.php" );
		include_file ( $blastpad_module_path . "/" . $dir . "/model/" . $class_name  . ".php" );
	}
}

spl_autoload_register( "autoloader" );
?>