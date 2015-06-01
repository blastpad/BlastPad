<?php

class template {
	
	private $content = "";
	
	function __construct(){
		
	}
	
	function get_content(){	
		return $this -> content;
	}
	
	function set_content( $part ){
		$this -> content .= $part;
	}
	
	function load_file( $template ){
		global $site;
		$theme_template = public_folder . "/shared/theme/" . $site[ "site_theme" ] . "/" . $template .  ".php";
		
		if ( file_exists ( root_directory . $theme_template ) ){
			$this -> set_content( require_file( $theme_template ) );
		} else {
			$this -> set_content( require_file ( blastpad_path . "/site/" . $template . ".php" ) );
		}	
	}
	
}


?>