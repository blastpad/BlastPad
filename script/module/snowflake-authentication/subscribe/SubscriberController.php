<?php
	
	class SubscriberController {
		
		public $subscriberModel;
		
		public function __construct() {
			
		}
		
		public function create() {	

			require_once ( dirname(__FILE__) . "../../../common/validation.php" );
			
			// Process email address.
			if ( $_SERVER[ "REQUEST_METHOD" ] != "POST" ) {		
				// Show sign up form.
				require_once ( "SubscriberView.php" );
				
			} else {
				$this -> subscriberModel = new SubscriberModel();
				
				$message = $this->subscriberModel->subscriber();
				
				if( empty( $message ) ) {
					$message = "Thank you for signing up.  Please share this with your friends.";
					require_once ( "SubscriberSuccess.php" );
					
				} else {
					require_once ( "SubscriberView.php" );
				}
			}	
		}
	}
?>
