<?php
namespace blastpad;
require_once( dirname(__FILE__) . "../../../calliope_database/class/model_class.php" );

class site extends model {
	
	private $site;
	
	function set_default(){

		
	/*	global $database;
		// Get site info.
		$row = $database -> fetch( "select site_id, site_name, site_tagline, site_theme, site_slug
			from site
			where site_is_default = 1
			LIMIT 1
			" ); 
		$this -> site = $row[ 0 ];
*/
		// Set default theme if no theme is selected.
		$this -> site [ "site_theme" ] = isset( $this -> site [ "site_theme" ] ) ? $this -> site [ "site_theme" ] : $default_site_theme;
		
		return $this -> site;
	}
	
}

?>