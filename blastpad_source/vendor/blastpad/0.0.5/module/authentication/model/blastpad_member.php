<?php 

class blastpad_member_model extends blastpad_model {
	
	// Add new member to database.
	function add( $option ){
		
		$setting = blastpad_setting::get();
		$blastpad_connection = blastpad_database::get();
		
		$sql = "start transaction;
			insert into " . $setting[ "database_connection" ][ "table_prefix" ] . "member 
			( member_name, member_email, member_page, member_referrer, member_ip_address, member_proxy_address ) 
			values ( :member_name, :member_email, :member_page, :member_referrer, :member_ip_address, :member_proxy_address );
			insert into " . $setting[ "database_connection" ][ "table_prefix" ] . "passphrase 
			( passphrase, member_id ) 
			values ( :passphrase, last_insert_id() );
			insert into " . $setting[ "database_connection" ][ "table_prefix" ] . "salt 
			( salt, pepper, passphrase_id ) 
			values ( :salt, :pepper, last_insert_id() );
			commit;";
		
		$result = $this->blastpad_connection->run( $sql, $option );
		return $result;
	}
	
	// Login member.
	function login( $option ){
		
		$setting = blastpad_setting::get();
		
		$sql = "select passphrase, salt, pepper
			from " . $setting[ "database_connection" ][ "table_prefix" ] . "member, " . $setting[ "database_connection" ][ "table_prefix" ] . "passphrase, " . $setting[ "database_connection" ][ "table_prefix" ] . "salt  
			where member_email = :member_email
			and " . $setting[ "database_connection" ][ "table_prefix" ] . "member.member_id = " . $setting[ "database_connection" ][ "table_prefix" ] . "passphrase.member_id
			and " . $setting[ "database_connection" ][ "table_prefix" ] . "passphrase.passphrase_id = " . $setting[ "database_connection" ][ "table_prefix" ] . "salt.passphrase_id";
		
		$result = blastpad_database::fetch( $sql, $option );
		return $result;
	}
}
?>