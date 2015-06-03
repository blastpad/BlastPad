<?php
namespace blastpad;

class site_builder {
	
	function __construct(){
		
		
	}
	
	function get_site(){

		$site = new site();
		$site_array = $site::all();
		$site_array = $site_array[0];

		return $site_array;
	}
	
}

?>