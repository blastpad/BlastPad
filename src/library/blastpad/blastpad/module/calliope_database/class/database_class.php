<?php
namespace blastpad;

/**
 *
 * Database class.
 *
 */

class database {
	
/**
 * Creates connection to the database connection using PDO.
 *
 * The settings for this is defined in the custom/config.php file.
 *
 * PDO (PHP Data Objects) allows you to access data from a database regardless of what database server is used. 
 * Supported database servers include:
		SQLite (default)
		MySQL
		PostgreSQL
		CUBRID
		MS SQL Server
		Firebird
		IBM
		Informix
		Oracle
		ODBC and DB2
		4D
 *
 */	

	// Variables.
	public $connection;
	public $statement;
 
	// Connect to database.
	function __construct( $db, $server = "production" ) {

		$database_username = isset( $db[ $server ][ "username" ] ) ? $db[ $server ][ "username" ] : "";
		$database_password = isset( $db[ $server ][ "password" ] ) ? $db[ $server ][ "password" ] : "";
		$database_charset = isset( $db[ $server ][ "charset" ] ) ? $db[ $server ][ "charset" ] : "";
		
		$data_source_name = new data_source_name( $db, $server );
			
		// Set database options.
		$db[ $server ][ "options" ][ \PDO::ATTR_PERSISTENT ] = true;

		if( version_compare( PHP_VERSION, "5.3.6", "<" ) ){
			$db[ $server ][ "options" ][ \PDO::MYSQL_ATTR_INIT_COMMAND ] = "SET NAMES " . $database_charset;
		}
		
		try {	
				
			// Establish database connection.
			$this -> connection = new \PDO( $data_source_name -> dsn,
				$database_username, 
				$database_password,
				$db[ $server ][ "options" ] );
	
		} catch( PDOException $e ) {
			//echo "ERROR: " . $e->getMessage();
			$this -> error = $e -> getMessage();
					
		}		
	}
	
	// Run SQL query and fetch result.
	function fetch( $sql, $option = [] ) {
		$result = $this -> run( $sql, $option );	
		$row = $this -> statement -> fetchAll(  );
		return $row;
	}
	
	// Run SQL query.
	function run( $sql, $option = [] ){
		$this -> statement = $this -> connection -> prepare( $sql );
		if ( isset( $option[ "parameter" ] ) ){
			$result = $this -> statement -> execute( $option[ "parameter" ] );
		}else{
			$result = $this -> statement -> execute();
		}	
		return $result;
	}
	
	function __destruct(){	
		$this -> statement = null; 				// Close the statement.
		$this -> connection = null;				// Close the connection.
	}
	
}	
?>