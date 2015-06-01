<?php
namespace blastpad;

/**
 *
 * Sanitize all inputs from $_GET, $_POST and $_COOKIE.
 *
 */

class sanitizer{
	
	private $unsafe;
	
	function __construct(){
		$this -> set_unsafe();
		$this -> sanitize_input_array();
	}
	
	// Backs up the value to a variable called $unsafe in case we need to access the unsanitized $unsafe variable later.
	function set_unsafe(){
		$this -> unsafe = [
			"_COOKIE" 	=>	$_COOKIE,
			"_GET" 		=>	$_GET,
			"_POST" 	=>	$_POST,
			"_REQUEST" 	=>	$_REQUEST,	
		];
	}
	
	// Gets the original unsanitized variable.
	function get_unsafe(){
		return $this -> unsafe;
	}
	
	// Sanitize all input from $_GET, $_POST, $_COOKIE and $_REQUEST.
	function sanitize_input_array(){
		
		foreach ( $_COOKIE as $key => $value){
			$_COOKIE[ $key ] = $this -> sanitize( $value );
		}
		
		foreach ( $_GET as $key => $value){
			$_GET[ $key ] = $this -> sanitize( $value );
		}
		
		foreach ( $_POST as $key => $value){
			$_POST[ $key ] = $this -> sanitize( $value );
		}
		
		foreach ( $_REQUEST as $key => $value){
			$_REQUEST[ $key ] = $this -> sanitize( $value );
		}	
	}
	
	// Sanitize data.
	function sanitize( $data ) {
	  $data = trim( $data );
	  $data = stripslashes( $data );
	  $data = htmlspecialchars( $data );
	  return $data;
	}
}

?>
