<?php
namespace blastpad;

class site extends model {
	
	private $site;
	
	function set_default(){
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