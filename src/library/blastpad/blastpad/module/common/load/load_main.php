<?php
namespace blastpad;

mb_internal_encoding( "UTF-8" );															// Set encoding to UTF-8.
mb_http_output( "UTF-8" );																	// Output UTF-8 to browser.

require_once ( root_directory . blastpad_module_path . "/common/load/autoload.php" );		// Autoload functions.	

$sanitizer = new sanitizer();											// Sanitizes $_GET, $_POST, $_COOKIE and $_REQUEST inputs.

// Variables.
global $database_connection;
global $server_environment;		
global $title, $tagline, $google_analytics_code;
global $database;

// Load helper functions.
require_file ( blastpad_module_path . "/common/validation.php" );							// Load validation functions.

// Load configuration files.
require_once ( root_directory . blastpad_path . "/common/global_variable.php" );			// Load the global variables.
require_once ( root_directory . custom_folder . "/config.php" );							// Load configuration.

require_file ( custom_folder . "/customize.php" );											// Load customization file.
require_file ( custom_folder . "/config/database/config_" . $server_environment . ".php" );	// Load database configuration details.	
require_once ( root_directory . custom_folder . "/config/route/config_route.php" );			// Load route configuration file.	

$database = new database( $database_connection, $server_environment );

/* If connection to database fails, go to installation script to create database tables and properly configure database.  
header( "Location: welcome.php" );
exit;*/

$site_builder = new site_builder();
$site = $site_builder -> get_site();

$routing = new routing();
$routing -> set( $route );

// Set errors.
// ini_set( "error_reporting", $config[ $server_environment ][ "error_reporting" ] );	

/*	
	function set_assert(){
		assert_options( ASSERT_ACTIVE,   true );
		assert_options( ASSERT_BAIL,     true );
		assert_options( ASSERT_WARNING,  false );
		assert_options( ASSERT_CALLBACK, "assert_failure" );
		assert_options( ASSERT_QUIET_EVAL, true );
	}
*/

?>