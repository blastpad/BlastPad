<?php 

/* Load all the things */
	
	// Load initial error logging.
	require_once( $blastpad[ "path" ][ "source" ] . $blastpad[ "path" ][ "source_version" ] . "/module/error/error.php" );
	
	// Load default paths.
	require_once ( $blastpad[ "path" ][ "source" ] . $blastpad[ "path" ][ "source_version" ] . "/default/path.php" );
	
	/* Load config files. */
	
	// Load server environment.
	require_once ( $blastpad[ "path" ][ "config" ] . "/index.php" );
	
	// Load database connection information.
	require_once ( $blastpad[ "path" ][ "config" ] . $blastpad[ "path" ][ "server_environment" ] . "/database.php" );
	
	// Load error settings.
	require_once ( $blastpad[ "path" ][ "config" ] . $blastpad[ "path" ][ "server_environment" ] . "/error_reporting.php" );
	blastpad_set_display_error( $blastpad[ "config" ][ "display_error" ] );

	/* Load database */
	require_once ( $blastpad[ "path" ][ "module" ] . "database/database.php" );
	
	// Load form helper.
	require_once ( $blastpad[ "path" ][ "module" ] . "form/form.php" );

	require_once ( $blastpad[ "path" ][ "module" ] . "blueprint/blueprint.php" );

?>