<?php
	
	blastpad_load_blueprint( $blastpad[ "blueprint_name" ], $blastpad[ "blueprint_version" ] );
	
	// Get directory list.
	function blastpad_get_directory_list( $path ){	
		$directory_list = glob( $path . '/*' , GLOB_ONLYDIR );
		return $directory_list;
	}
	
	// Get active directory.
	function blastpad_get_active_directory( $path ){
		$active_directory = blastpad_get_directory_list( $path )[ 0 ];
		return $active_directory;
	}
	
	function blastpad_load_blueprint( $blueprint_name, $blueprint_version ){
		global $blastpad, $message;
		$blastpad[ "path" ][ "current_blueprint" ] = $blastpad[ "path" ][ "blueprint" ] . $blueprint_name . "/" . $blueprint_version;
		require_once( $blastpad[ "path" ][ "current_blueprint" ] . "/index.php" );
	}
