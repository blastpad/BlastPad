<?php
namespace blastpad;
	
	class user_login {
		
		public $user_login_model;
		
		public function __construct() {
			
		}
		
		public function create() {
			
			if ( $_SERVER[ "REQUEST_METHOD" ] != "POST" ) {
				// Display form.
				require_once ( blastpad_module_path . "../../view/user_login_view.php" );
			} else {
				$message = "";
				
				// If form is submitted, process the form.
				if ( $_POST[ "login" ] ) {
					
					$required_array = [
						$_POST[ "user_name" ] => "username",
						$_POST[ "user_password" ] => "password",
					];
					//$message .= check_required( $_POST[ "user_name" ], "username" );
					//$message .= check_required( $_POST[ "user_password" ], "password" );
					$message .= check_required( $required_array );
					
					if ( empty( $message ) ) {
						require_file( "user_login_model.php" );
						$this -> user_login_model = new user_login_model();				
						$message .= $this-> user_login_model -> login();
						
						if ( empty( $message ) ) {
							// Display success page.
							require_once ( blastpad_module_path . "../../view/user_login_success.php" );
							//include "user_login_success.php";
						} else {
							// Display form and error message.
							//include "user_login_view.php";
							require_once ( blastpad_module_path . "../../view/user_login_view.php" );
						}
					} else {
							// Display form and error message.
							//include "user_login_view.php";
							require_once ( blastpad_module_path . "../../view/user_login_view.php" );
					}
				}
			}
		}
	}
?>
