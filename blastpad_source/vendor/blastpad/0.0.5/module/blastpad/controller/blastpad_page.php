<?php
class blastpad_page{
	
	private $blastpad_current_page;
	
	function __construct(){
		$page = $this->get_page_name();	
		$this->blastpad_current_page = $this->route( $page );
		$this->process_form();
	}
	
	function render(){
		$blastpad_blueprint = new blastpad_blueprint();
		$blueprint = $blastpad_blueprint->get();
		
		require_once( $blueprint . "block/head.php" );
		require_once( $blueprint . $this->blastpad_current_page );
		require_once( $blueprint . "block/foot.php" );
	}
	
	private function get_page_name(){
		global $blastpad_page_name;
		
		if ( !isset( $blastpad_page_name ) ){
			if ( isset( $_SERVER[ "PATH_INFO" ] ) ){
				$page = explode( "/", $_SERVER[ "PATH_INFO" ] );
			} elseif( isset( $_SERVER[ "REQUEST_URI" ] ) ) {
				$page[0] = basename( $_SERVER[ "REQUEST_URI" ] );
			} else {
				$page[0] = "index";
			}
		}
		
		return $page;	
	}
	
	private function process_form(){
		// Process forms.
		if ( isset( $_POST[ "bp_form" ] ) ){	
			if ( $_POST[ "bp_form" ] == "subscribe" ) {
				$blastpad_subscriber = new blastpad_subscriber();
				$this->blastpad_current_page = $blastpad_subscriber->add();
			} elseif ( $_POST[ "bp_form" ] == "login" ) {
				$blastpad_member = new blastpad_member();
				$blastpad_member->login();
			} elseif ( $_POST[ "bp_form" ] == "register" ) {
				$blastpad_member = new blastpad_member();
				$blastpad_member->add();
			}
		}
	}
	
	private function route( $page ){
		
		$route_path = array(
			"index" => "index.php",
			"resume" => "page_resume.php",
			"register" => "block/form_register.php",
			"login" => "block/form_login.php",
			"dashboard" => "page_dashboard.php",
		);
	
		if ( array_key_exists( $page[0], $route_path ) ){
			$page = $route_path[ $page[0] ];
		} else {
			$page = $route_path[ "index" ];
		}	
		return $page;
	}	
}
?>