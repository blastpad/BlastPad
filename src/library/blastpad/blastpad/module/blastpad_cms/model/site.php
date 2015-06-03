<?php
namespace blastpad;
require_once( dirname(__FILE__) . "../../../calliope_database/class/model_class.php" );

class site extends model {
	
	private $site;
	
	function set_default(){
		require_once ( dirname(__FILE__) . "../../../calliope_database/class/model_class.php" );
		
	/*	global $database;
		// Get site info.
		$row = $database -> fetch( "select site_id, site_name, site_tagline, site_theme, site_slug
			from site
			where site_is_default = 1
			LIMIT 1
			" ); 
		$this -> site = $row[ 0 ];
*/

		global $default_site_theme;
		global $site_name;
		global $site_tagline;
		
		// Set default theme if no theme is selected.
		$this -> site [ "site_theme" ] = !( empty( $this -> site [ "site_theme" ] ) ) ? $this -> site [ "site_theme" ] : $default_site_theme;
		
		$this -> site [ "site_name" ] = !( empty( $this -> site [ "site_name" ] ) ) ? $this -> site [ "site_name" ] : $site_name;
		$this -> site [ "site_tagline" ] = !( empty( $this -> site [ "site_tagline" ] ) ) ? $this -> site [ "site_tagline" ] : $site_tagline;
		
		return $this -> site;
	}
	
}

?>