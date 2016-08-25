<?php
	blastpad_set_error();
	
	function blastpad_set_error(){
		global $blastpad;
		blastpad_set_display_error();
		ini_set( "log_errors", 1 );
		ini_set( "error_log", $blastpad[ "path" ][ "root" ] . "/blastpad_custom/log/blastpad_error.log" );	
	}
	
	function blastpad_set_display_error( $display_error = 1 ){
		ini_set( "display_errors", $display_error );	
	}
?>