<?php
class blastpad{

	private $blueprint;

	function __construct(){			
		global $blastpad_config;
		require_once ( $blastpad_config[ "path" ][ "module" ] . "common/controller/autoload.php" );	// Autoload functions.

		// This security class needs to be at the very beginning of the file after autoload.
		$blastpad_security = new blastpad_security();												// Security functions.
		$blastpad_sanitizer = new blastpad_sanitizer();												// Sanitizes $_GET, $_POST, $_COOKIE and $_REQUEST inputs.
		
		$blastpad_setting = new blastpad_setting();
		$blastpad_setting->set();
		$setting = $blastpad_setting->get();
		
		$blastpad_database = new blastpad_database( $setting[ "database_connection" ], $setting[ "server_environment" ] );
		$blastpad_connection = blastpad_database::get();
		
		$blastpad_blueprint = new blastpad_blueprint();
		$this->blueprint = $blastpad_blueprint->get();
		
		$blastpad_page = new blastpad_page();
		$blastpad_page->render();
	}
}
?>