<?php 

class blastpad_cookie{
	// Set a cookie.
	function set( $name, $value ){
		setcookie( $name, $value, time() + 60 * 60 * 24, "/", "", false, true );	// Set cookie for 24 hours.
		$_COOKIE[ $name ] = $value;	
	}
	
	// Remove a cookie.
	function remove( $name ){
		setcookie( $name, "", 1 );
	}
	
	// Remove all cookies.
	function remove_all(){
		foreach ( $_COOKIE as $key => $value ){ 
			$this->remove( $key );
		}
	}
}
?>