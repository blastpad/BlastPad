<?php
// Check if form is submitted.
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ){
	bp_create_subscriber();
}

function bp_create_subscriber(){
	global $blastpad, $message;
	
	if ( $_POST[ "subscriber_email" ] != "" ){
		
		$sql = "insert into " . $blastpad[ "config" ][ "database_connection" ][ "prefix" ] . "subscriber
			( subscriber_email, subscriber_page, subscriber_referrer, subscriber_ip_address, subscriber_proxy_address, site_id ) 
			VALUES 
			( :subscriber_email, :subscriber_page, :subscriber_referrer, :subscriber_ip_address, :subscriber_proxy_address, 1 )";
		$statement = $blastpad[ "database" ]->prepare( $sql );
		
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
				require_once ( $blastpad[ "path" ][ "blueprint" ] . $blastpad[ "blueprint_name" ] . "/" . $blastpad[ "blueprint_version" ] . "/block/head.php" );
				require_once ( $blastpad[ "path" ][ "blueprint" ] . $blastpad[ "blueprint_name" ] . "/" . $blastpad[ "blueprint_version" ] . "/block/form_subscribe_success.php" );
				require_once ( $blastpad[ "path" ][ "blueprint" ] . $blastpad[ "blueprint_name" ] . "/" . $blastpad[ "blueprint_version" ] . "/block/foot.php" );
				exit;
			} else {					
				$message = "There was an error signing up.  Please try again later."; 
				//print_r( error_get_last() );
			}
		} catch( PDOException $e ) {
			$message = "There was an error signing up.  Please try again later.";
		}	
	} else {		
		$message = "Please enter email.";
	}

	return $message;
}