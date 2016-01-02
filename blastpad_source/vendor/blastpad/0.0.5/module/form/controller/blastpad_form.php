<?php 
abstract class blastpad_form {
	
	// Grabs the $_POST, $_SERVER and $_COOKIE values and places them in array.
	// $form_array should be in the format of $variable, $type, $option.
	function get_value ( $form_array ){
		
		$form_field = array();
		
		foreach ( $form_array as $key => $value ){
			// Get value from $_POST or $_SERVER or $_COOKIE.
			if ( $value[ 1 ] == "post" ){
				$form_field[ $key ] = isset( $_POST[ $value[ 0 ] ] ) ? $_POST[ $value[ 0 ] ] : "";
			} elseif ( $value[ 1 ] == "server" ){
				$form_field[ $key ] = isset( $_SERVER[ $value[ 0 ] ] ) ? $_SERVER[ $value[ 0 ] ] : "";
			} elseif ( $value[ 1 ] == "cookie" ){
				$form_field[ $key ] = isset( $_COOKIE[ $value[ 0 ] ] ) ? $_COOKIE[ $value[ 0 ] ] : "";	
			}
			
			// Check required fields.
			if ( in_array( "required", $value ) ){
				if ( empty( $form_field[ $key ] ) ){
					$this->message = "Please complete required fields.";
					return false;
				}
			}	

			// Make data lowercase.
			if ( in_array( "lowercase", $value ) ){
				$form_field[ $key ] = strtolower( $form_field[ $key ] );
			}	
			
			if ( !empty( $form_field[ $key ] ) ){
			
				// Validate and sanitize input.
				if ( $value[ 2 ] == "email" ){
					$form_field[ $key ] = filter_var ( $form_field[ $key ], FILTER_VALIDATE_EMAIL );
				} elseif ( $value[ 2 ] == "url" ){
					$form_field[ $key ] = filter_var ( $form_field[ $key ], FILTER_SANITIZE_URL );
				} elseif ( $value[ 2 ] == "ip" ){
					$form_field[ $key ] = filter_var ( $form_field[ $key ], FILTER_VALIDATE_IP );
				// Default is sanitize string.
				} else {
					$form_field[ $key ] = filter_var ( $form_field[ $key ], FILTER_SANITIZE_STRING );
				}
				
				$form_field[ $key ] = strip_tags( html_entity_decode( $form_field[ $key ] ) );
				$form_field[ $key ] = htmlspecialchars( $form_field[ $key ] );
				
				if ( false === $form_field[ $key ] ) {
					$this->message = "<br />Format does not seem to be correct.";
					return false;
				}
			}
		}

		return $form_field;
	}
}

?>