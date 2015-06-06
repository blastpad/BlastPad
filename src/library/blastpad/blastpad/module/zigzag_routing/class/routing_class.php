<?php
namespace blastpad;

class routing {
	
	function __construct(){
		
	}
	
	function set( $route ){	
		$site_id = isset ( $_GET[ "site_id" ] ) ? $_GET[ "site_id" ] : "";
		$page = isset ( $_GET[ "page" ] ) ? $_GET[ "page" ] : "index";		

		if ( array_key_exists( $page, $route ) ){
			$route_path = root_directory . $route[ $page ];
		} else {
			// If there is no route specified, send to 404 (no page found) page.
			$route_path = root_directory . blastpad_module_path . "/blastpad_cms/master/site/404.php";
		}	
		
		$view = new view();
		echo $view -> render( $route_path );
	}
}

?>