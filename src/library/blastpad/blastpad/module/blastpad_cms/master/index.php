<?php 
/**
 * Routes dashboard to dashboard and others to the master site.
 */ 

	if ( isset ( $dashboard ) ) {
		require_file( "/dashboard/index.php" );
	} else {
		require_file( blastpad_path . "/site/index.php" );			
	}

?>