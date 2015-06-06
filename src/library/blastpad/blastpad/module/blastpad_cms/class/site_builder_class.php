<?php
namespace blastpad;

class site_builder {
	
	function get_site(){

		$site = new site();
		$site_array = $site::all();
		
		if ( empty( $site_array ) ){
			$site_array = $site -> set_default();			
		} else {
			$site_array = $site_array[ 0 ];	
		}
		
		return $site_array;
	}	
}
?>