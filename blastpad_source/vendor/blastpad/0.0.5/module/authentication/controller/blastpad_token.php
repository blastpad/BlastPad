<?php 

class blastpad_token {

	function salt( $passphrase, $salt, $pepper, $site_salt, $site_salt_cost = 12 ){	
		
		// Add site salt.
		$option = [
			"cost" => $site_salt_cost,
			"salt" => $site_salt,
		];
		
		$passphrase = password_hash( $passphrase, PASSWORD_DEFAULT, $option );
		
		// Add salt and pepper to passphrase.
		$passphrase = $salt . $passphrase . $pepper;
		
		return $passphrase;
	}	
	
	function get_random( $size = 32, $algorithm = "mcrypt", $source = "" ){
		
		$source = $this->get_source( $source );
		$algorithm = $this->get_algorithm( $algorithm );
	
		// Possible algorithms are random_bytes(PHP 7), mcrypt (default, PHP 4) and openssl.
		if ( $algorithm == "openssl" ){
			$token = openssl_random_pseudo_bytes( $size );
		} elseif ( $algorithm == "random_bytes" ){
			$token = bin2hex( random_bytes( $size ) );
		} else {	
			// Default is mcrypt.
			$token = mcrypt_create_iv( $size, $source );
		}	
		
		$token = base64_encode( $token );

		return $token;
	}
	
	function get_algorithm( $algorithm ){
		if ( $algorithm == "random_bytes" ){
			if ( !function_exists( "random_bytes" ) ) {
				$algorithm = "mcrypt";
			}	
		}
		
		if ( ( $algorithm == "mcrypt" ) or ( empty( $algorithm ) ) ){
			if ( !function_exists( "mcrypt_create_iv" ) ) {
				$algorithm = "openssl";
			}
		}
		
		return $algorithm;
	}
	
	function get_source( $source ){
		/** 
		 * Possible values for $source are 
		 *  - MCRYPT_RAND (system random number generator)
		 *  - MCRYPT_DEV_RANDOM (read data from /dev/random)
		 *  - MCRYPT_DEV_URANDOM (read data from /dev/urandom)
		*/
		
		// Before version 5.3.0, only MCRYPT_RAND was available on Windows.
		if ( ( version_compare( PHP_VERSION, "5.3.0" ) >= 0 ) and ( strtolower( substr( PHP_OS, 0, 3 )) === "win" ) ) {
			$source = MCRYPT_RAND;
		// If no source is specified, defaults to MCRYPT_DEV_URANDOM.
		} elseif ( empty ( $source ) ){
			$source = MCRYPT_DEV_URANDOM;
		}
		
		return $source;
	}
	
	
}
?>