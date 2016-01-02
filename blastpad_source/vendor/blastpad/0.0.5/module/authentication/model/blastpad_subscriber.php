<?php	
class blastpad_subscriber_model extends blastpad_model {

	private $message;

	function add(){
		
		if ( $_POST[ "subscriber_email" ] != "" ){
			$setting = blastpad_setting::get();
			
			$sql = "insert into " . $setting[ "database_connection" ][ "table_prefix" ] . "subscriber
				( subscriber_email, subscriber_page, subscriber_referrer, subscriber_ip_address, subscriber_proxy_address, site_id ) 
				VALUES ( :subscriber_email, :subscriber_page, :subscriber_referrer, :subscriber_ip_address, :subscriber_proxy_address, 1 )";
			$statement = $this->blastpad_connection->prepare( $sql );
			
			$subscriber_email = isset( $_POST[ "subscriber_email" ] ) ? filter_var( $_POST[ "subscriber_email" ], FILTER_VALIDATE_EMAIL ) : "";
			$subscriber_page = isset( $_SERVER[ "SCRIPT_NAME" ] ) ? filter_var( $_SERVER[ "SCRIPT_NAME" ], FILTER_SANITIZE_URL ) : "";
			$subscriber_referrer = isset( $_SERVER[ "HTTP_REFERER" ] ) ? filter_var( $_SERVER[ "HTTP_REFERER" ], FILTER_SANITIZE_URL ) : "";
			$subscriber_ip_address = isset( $_SERVER[ "REMOTE_ADDR" ] ) ? filter_var( $_SERVER[ "REMOTE_ADDR" ], FILTER_SANITIZE_STRING ) : "";
			$subscriber_proxy_address = isset( $_SERVER[ "HTTP_X_FORWARDED_FOR" ] ) ? filter_var( $_SERVER[ "HTTP_X_FORWARDED_FOR" ], FILTER_SANITIZE_STRING )  : "";
			
			$statement -> bindParam( ":subscriber_email", $subscriber_email );
			$statement -> bindParam( ":subscriber_page", $subscriber_page ); 
			$statement -> bindParam( ":subscriber_referrer", $subscriber_referrer );
			$statement -> bindParam( ":subscriber_ip_address", $subscriber_ip_address );		
			$statement -> bindParam( ":subscriber_proxy_address", $subscriber_proxy_address );

			try {
				$result = $statement->execute();
				if ( $result ){

				} else {					
					$this->message = "There was an error signing up.  Please try again later.";
				}
			} catch( PDOException $e ) {
				$this->message = "There was an error signing up.  Please try again later.";
				$this->error = $e->getMessage();
			}
			
		} else {		
			$this->message = "Please enter email.";
		}	

		return $this->message;
	}
	
}
?>