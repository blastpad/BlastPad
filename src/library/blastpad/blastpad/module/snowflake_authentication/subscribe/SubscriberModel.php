<?php	
	class SubscriberModel {

		function subscriber(){
			$message = "";
			
			if ( $_POST[ "subscriber_email" ] != "" ){
				require_once ( dirname(__FILE__) . "../../../common/database.php" );
				require_once ( dirname(__FILE__) . "../../../common/validation.php" );
				$conn = connect_to_database();
				
				$stmt = $conn -> prepare( "insert into subscriber ( subscriber_email ) VALUES ( :subscriber_email )" );
				$stmt -> bindParam( ":subscriber_email",  sanitize( $_POST[ "subscriber_email" ] ) );

				$stmt->execute();
			} else {
				
				$message = "Please enter email.";
			}	

			return $message;
		}
		
	}
?>