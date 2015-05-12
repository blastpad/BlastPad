<?php

	function validate_name( $data ){
		$data = sanitize_data( $data );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $data ) ) {
		  $message .= "<br />Only letters and white space allowed. "; 
		}
		return $data;
	}

	function sanitize( $data ) {
	  $data = trim( $data );
	  $data = stripslashes( $data );
	  $data = htmlspecialchars( $data );
	  return $data;
	}
	
	function check_required( $data, $input_type ){
		$message = "";
		if ( empty( $data ) ){
			$message .= "<br />Please enter " . $input_type . ".";
		}
		return $message;
	}	

?>