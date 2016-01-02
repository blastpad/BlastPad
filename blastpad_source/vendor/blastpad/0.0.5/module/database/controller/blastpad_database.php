<?php
/**
 *
 * Database class.
 *
 */

class blastpad_database {
	
/**
 * Creates connection to the database connection using PDO.
 *
 * The settings for this is defined in the custom/config.php file.
 *
 * PDO (PHP Data Objects) allows you to access data from a database regardless of what database server is used. 
 * Supported database servers include:
		MySQL (default)
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
	private static $connection;
	private $statement;
	private $error_message;
	private $table_prefix;
 
	// Connect to database.
	function __construct( $db, $server = "standard" ) {
		$database_username = isset( $db[ $server ][ "username" ] ) ? $db[ $server ][ "username" ] : "";
		$database_password = isset( $db[ $server ][ "password" ] ) ? $db[ $server ][ "password" ] : "";
		$database_charset = isset( $db[ $server ][ "charset" ] ) ? $db[ $server ][ "charset" ] : "";
		$this->table_prefix = $db[ "table_prefix" ];
		
		$blastpad_data_source_name = new blastpad_data_source_name( $db, $server );	
			
		// Set database options.
		$db[ $server ][ "options" ][ \PDO::ATTR_PERSISTENT ] = true;

		if( version_compare( PHP_VERSION, "5.3.6", "<" ) ){
			$db[ $server ][ "options" ][ \PDO::MYSQL_ATTR_INIT_COMMAND ] = "SET NAMES " . $database_charset;
		}
		
		try {
			// Establish database connection.
			self::$connection = new \PDO( $blastpad_data_source_name -> get_dsn(),
				$database_username, 
				$database_password,
				$db[ $server ][ "options" ] );
		} catch( PDOException $e ) {
			echo "There was an error.  Please try again later.";
			$this -> error = $e -> getMessage();		
		}		
	}
	
	// Find in table.
	function find( $needle, $column, $table, $option = [] ){
		if ( isset( $option[ "case_sensitive" ] ) ){
			if ( ( $option[ "case_sensitive" ] != true ) ){
				$column = "lower(" . $column . ")";
				$needle = strtolower( $needle );
			}
		}
		
		$sql = "select " . $column . " from " . $this->table_prefix . $table . " 
			where " . $column . " = :needle";

		$option[ "parameter" ] = array( ":needle" => $needle );		
		$row = $this->get( $sql, $option );
		return $row;
		
	}
	
	// Run SQL query and fetch result.
	function fetch( $sql, $option = [] ) {
		$result = $this->run( $sql, $option );	
		$row = $this -> statement -> fetchAll(  );
		return $row;
	}
	
	// Run SQL query.
	function run( $sql, $option = [] ){
		$this->statement = $this->connection->prepare( $sql );

		if ( isset( $option[ "parameter" ] ) ){
			foreach ( $option[ "parameter" ] as $key => $value ){	
				$this->statement->bindValue( $key, $value );
			}
		}

		try {
			$result = $this->statement->execute();
		} catch( PDOException $e ) {
			$message = "There was an error registering.  Please try again later.";
			$this->error_message = $e -> getMessage();
			return false;
		}
		
		return $result;
	}
	
	// Add data to table.
	function add( $table, $column ){
		$column_name = implode( ", ", array_keys( $column ) );
		$column_parameter = implode( ", :", array_keys( $column ) );
		
		$sql = "insert into " . $this->table_prefix . $table . "
			( " . $column_name . " )
			values ( :" . $column_parameter . " ) ";
			
		$option[ "parameter" ] = array();	
		foreach ( $column as $key => $value ){
			array_push( $option[ "parameter" ],  array( ":" . $key => $value ) );
		}

		$result = $this->run( $sql, $option );
		return $result;
	}
	
	static function get(){	
		return self::$connection;
	}
	
	function __destruct(){	
		$this -> statement = null; 				// Close the statement.
		$this -> connection = null;				// Close the connection.
	}
	
}	
?>