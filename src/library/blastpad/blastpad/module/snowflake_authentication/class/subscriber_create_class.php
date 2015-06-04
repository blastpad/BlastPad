<?php
namespace blastpad;
	
class subscriber_create {
	
	public $subscriber_creator_model;
		
	public function __construct() {
		
		$this -> create_subscriber();
	}		

	private function create_subscriber(){

		// If form is submitted.
		if ( isset ( $_SERVER[ "REQUEST_METHOD" ] ) ) {
			if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {		
				$record_array 	= [ "subscriber_email" => "subscriber_email" ];
				$required_array = [ "email" => "subscriber_email" ];
				$unique_array	= [ "subscriber_email" => "subscriber_email" ];
				
				// When form is submitted, insert into database.
				require_once( dirname(__FILE__) . "../../subscribe/subscriber_model.php" );
				$this -> subscriber_creator_model = new subscriber_model();			
				$message = $this -> subscriber_creator_model -> create_subscriber( $record_array, $required_array, $unique_array );

				if ( empty( $message ) ) {
					// Show sign up success form.
					$message = "Thank you for signing up.  Please share this with your friends.";
					require_once ( dirname(__FILE__) . "../../template/create_subscriber_success.php" );
					exit;
				}
			}	
		}	
		
		require_once ( dirname(__FILE__) . "../../template/create_subscriber.php" );
	}
	
}
?>
