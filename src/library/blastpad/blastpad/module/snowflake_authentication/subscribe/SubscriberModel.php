<?php	
	class SubscriberModel {

		function subscriber(){
			global $database;
			$message = "";
			
			if ( $_POST[ "subscriber_email" ] != "" ){
				require_once ( dirname(__FILE__) . "../../../common/validation.php" );
				
				$sql = "insert into subscriber ( subscriber_email ) VALUES ( :subscriber_email )";
				$statement = $database -> connection -> prepare( $sql );
				$statement -> bindParam( ":subscriber_email",  sanitize( $_POST[ "subscriber_email" ] ) );

				$statement -> execute();
			} else {
				
				$message = "Please enter email.";
			}	

			return $message;
		}
		
	}
?>