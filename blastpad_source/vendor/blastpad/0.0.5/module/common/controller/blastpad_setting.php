<?php

class blastpad_setting{
	
	private static $blastpad_setting;
	
	static function get(){
		return self::$blastpad_setting;
	}
	
	function set(){
		global $blastpad_config;	
		
		// Load configuration files.
		require_once ( $blastpad_config[ "path" ][ "custom" ] . "config.php" );													// Load configuration.
		require_once ( $blastpad_config[ "path" ][ "custom" ] . "config/database/config_" . $blastpad_config[ "server_environment" ] . ".php" );	// Load database configuration details.		
		require_once ( $blastpad_config[ "path" ][ "custom" ] . "config/route/config_route.php" );	// Load route configuration file.	
		
		self::$blastpad_setting = $blastpad_config;
	}
	
}

?>