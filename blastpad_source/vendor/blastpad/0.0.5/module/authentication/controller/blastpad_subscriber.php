<?php
	
class blastpad_subscriber {
	private $message;
	
	function add() {		
		// Process email address.
		if (( isset( $_POST[ "bp_form" ] ) ) and ( $_POST[ "bp_form" ] == "subscribe" ) ) {

			$subscriber_model = new blastpad_subscriber_model();
			$this->message = $subscriber_model->add();

			if( empty( $this->message ) ) {			
				return ( "block/form_subscribe_success.php" );	
			}	
		}	
	}
}
?>
