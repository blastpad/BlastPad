<?php
	function blastpad_get_static_site(){
		blastpad_get_static_blueprint();	
	}
	
	function blastpad_get_static_blueprint(){
		global $blastpad;
		/* Load blueprint. */
		require_once ( $blastpad[ "path" ][ "module" ] . "blueprint/blueprint.php" );
		
		// Get first active blueprint.
		$active_blueprint = blastpad_get_active_directory( $blastpad[ "path" ][ "blueprint" ] );
		$blastpad[ "blueprint_name" ] = basename( $active_blueprint );
		
		$blastpad[ "blueprint_version" ] = basename( blastpad_get_active_directory( $active_blueprint ) );
		
		
	}
?>