<?php 

	blastpad_set_path();

	function blastpad_set_path(){
		global $blastpad;

		/* Default directory paths */
		$blastpad[ "path" ][ "config" ] = $blastpad[ "path" ][ "root" ] . "/blastpad_custom/config/";
		$blastpad[ "path" ][ "module" ] = $blastpad[ "path" ][ "source" ] . $blastpad[ "path" ][ "source_version" ] . "/module/";
		
		/* Assets directory paths */
		$blastpad[ "path" ][ "asset" ] = $blastpad[ "path" ][ "public" ] . "asset/";
		$blastpad[ "path" ][ "blueprint" ] = $blastpad[ "path" ][ "asset" ] . "blueprint/";
		$blastpad[ "path" ][ "block" ] = $blastpad[ "path" ][ "asset" ] . "block/";
		$blastpad[ "path" ][ "motif" ] = $blastpad[ "path" ][ "asset" ] . "motif/";
		$blastpad[ "path" ][ "css" ] = $blastpad[ "path" ][ "asset" ] . "css/";
		$blastpad[ "path" ][ "javascript" ] = $blastpad[ "path" ][ "asset" ] . "javascript/";
		
		// Default values.
		$blastpad[ "blueprint_name" ] = "blastpad";
		$blastpad[ "blueprint_version" ] = "0.0.2";
	}	
?>	