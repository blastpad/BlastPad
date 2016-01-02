<?php 

class blastpad_member extends blastpad_form {
	
	public $message = "";
	private $salt;
	private $pepper;
	private $setting;
	
	function __construct(){
		$this->setting = blastpad_setting::get();	
	}
	
	// Member login.
	function login(){
		$blastpad_cookie = new blastpad_cookie();
		
		// If form is submitted, process the form.
		if ( isset( $_POST[ "login" ] ) ){
			// Limit login attempts.
			if ( !isset ( $_COOKIE[ "login_attempt" ] ) ){
				$blastpad_cookie->set( "login_attempt", 0 );
			} elseif ( $_COOKIE[ "login_attempt" ] > $this->setting[ "allowed_login_attempt" ]  ) {	
				$this->message .= "<br />Too many login attempts.  Please wait a bit, then try again.";
				return $this->message;
			}
			
			if ( empty( $this->message ) ){
				
				// Get the form values.
				$form_array = array(
					"member_email" => array( "member_email", "post", "email", "required", "lowercase", "unique" ),
					"passphrase" => array( "passphrase", "post", "string", "required" ),
				);
		
				$form_array = $this->get_value( $form_array );
				
				$option[ "parameter" ] = array(
						":member_email" => $form_array[ "member_email" ], 			
					);
				$blastpad_member_model = new blastpad_member_model();
				$result = $blastpad_member_model->login( $option );
	
	
				if ( $result ){
					$this->salt = $result[ 0 ][ "salt" ];
					$this->pepper = $result[ 0 ][ "pepper" ];

					if ( $this->hash_passphrase( $form_array[ "passphrase" ] ) == $result[ 0 ][ "passphrase" ] ){		
						// Reset login attempts.
						$blastpad_cookie->remove( "login_attempt" );

						// On login success, redirect to next page.
						require_once ( $this->setting[ "path" ][ "root" ] . "dashboard/editor/index.php" );
						exit;
					} else {
						$blastpad_cookie->set( "login_attempt", $_COOKIE[ "login_attempt" ] + 1, time() + $this->setting[ "allowed_login_attempt_expire" ] );
						$this->message .= "<br />Login incorrect.  Please try again.";
						return $this->message;
					}
				} else {
					$this->message .= "<br />Login incorrect.  Please try again.";
					return $this->message;
				}
			}	
		}
	}	
	
	// New member registration.
	function add(){
		$blastpad_connection = blastpad_database::get();
		
		if ( isset( $_POST[ "register" ] ) ){

			// Get the form values.
			$form_array = array(
				"member_name" => array( "member_name", "post", "string", "required", "lowercase", "unique" ),
				"member_email" => array( "member_email", "post", "email", "required", "lowercase", "unique" ),
				"passphrase" => array( "passphrase", "post", "string", "required" ),
				"member_page" => array( "PHP_SELF", "server", "url" ),
				"member_referrer" => array( "blastpad_referrer", "cookie", "url" ),
				"member_ip_address" => array( "REMOTE_ADDR", "server", "ip" ),
				"member_proxy_address" => array( "HTTP_X_FORWARDED_FOR", "server", "ip" ),
			);
	
			$form_array = $this->get_value( $form_array );
			
			// Check if member name already exists.
			if ( empty( $this->message ) ){	
				if ( $result = $this->blastpad_connection->find( $form_array[ "member_email" ], "member_name", "member" ) ){
					$this->message .= "<br />User name already in use.  Please choose a different user name.";
					return $this->message;
				} 
			}
			
			// Check if email address already exists.
			if ( empty( $this->message ) ){
				if ( $result = $blastpad_connection->find( $form_array[ "member_email" ], "member_email", "member" ) ){
					$this->message .= "<br />Email already in use.  Please choose a different email address.";
					return $this->message;
				}
			}
			
			// Add user to database.
			if ( empty( $this->message ) ){
				
				$option[ "parameter" ] = array(
						":member_name" => $form_array[ "member_email" ], 
						":member_email" => $form_array[ "member_email" ], 
						":member_page" => $form_array[ "member_page" ], 
						":member_referrer" => $form_array[ "member_referrer" ], 
						":member_ip_address" => $form_array[ "member_ip_address" ], 
						":member_proxy_address" => $form_array[ "member_proxy_address" ], 
						":salt" => $this->get_salt(),
						":pepper" => $this->get_pepper(),
						":passphrase" => $this->hash_passphrase( $form_array[ "passphrase" ] ),			
					);
				
				$blastpad_member_model = new blastpad_member_model();
				$result = $blastpad_member_model->add( $option );

				if ( $result ) {
					// Success
					require_once ( $this->setting[ "path" ][ "blueprint" ] . "blastpad/register_success.php" );
					exit;
				} else {
					$this->message .= "<br />There was a problem registering.  Please try again later.";
					return $this->message;
				}
			}	
		}
		return $this->message;
	}

	function hash_passphrase( $passphrase ){	
		$blastpad_token = new blastpad_token();
		$passphrase = $blastpad_token->salt( $passphrase, $this->salt, $this->pepper, $this->setting[ "site_salt" ], $this->setting[ "site_salt_cost" ] );		
		return $passphrase;
	}
	
	function get_salt(){
		$blastpad_token = new blastpad_token();
		$this->salt = $blastpad_token->get_random( $this->setting[ "passphrase_salt_size" ] );
		return $this->salt;
	}
	
	function get_pepper(){
		$blastpad_token = new blastpad_token();
		$this->pepper = $blastpad_token->get_random( $this->setting[ "passphrase_pepper_size" ] );
		return $this->pepper;
	}
}
?>