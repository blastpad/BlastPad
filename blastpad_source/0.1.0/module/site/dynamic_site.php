<?php 
	function blastpad_get_dynamic_site(){
		blastpad_get_dynamic_blueprint();
	}
	
	function blastpad_get_dynamic_blueprint(){
		
		global $blastpad;
		$sql = "select * from bp_site";
		
		try {
			foreach( $blastpad[ "database" ]->query( $sql ) as $row ){
				$blastpad[ "blueprint_name" ] = $row[ "site_blueprint_name" ];
				$blastpad[ "blueprint_version" ] = $row[ "site_blueprint_version" ];
			}
			
		} catch ( PDOException $e ) {	
			error_log( "Getting site from database error: " . $e->getMessage() . "\n" );
		}
	}

?>