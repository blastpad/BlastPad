<?php

	function sanitize( $data ) {
	  $data = trim( $data );
	  $data = stripslashes( $data );
	  $data = htmlspecialchars( $data );
	  return $data;
	}

	function validate_name( $data ){
		$data = sanitize( $data );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $data ) ) {
		  $message .= "<br />Only letters and white space allowed. "; 
		}
		return $data;
	}
	
	function check_required( $required_array ){
		$message = "";
		
		foreach ( $required_array as $key => $value) {
			if ( empty( $value ) ){
				$message .= "<br />Please enter " . $key . ".";
			}
		}

		return $message;
	}	
	
?>