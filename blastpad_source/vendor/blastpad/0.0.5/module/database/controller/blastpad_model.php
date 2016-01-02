<?php

abstract class blastpad_model {
	
	static protected $table = "test";
	protected $blastpad_connection;
	
	function __construct(){
		self::set_table();
		$this->blastpad_connection = blastpad_database::get();
	}
	
	// Sets the table name.
	function set_table(){
		
		$class = new \ReflectionClass( get_called_class() );	
		self::$table = $class -> getShortName();
	}
	
	// Gets the table name.
	function get_table(){
		
		return self::$table;	
	}
	
	function set(){
		
	}
	
	function save(){
		
		
	}
	
	function find(){
		
		
	}
	
	public function all( $option = "" ) {

		$option [ "column_array" ] = [ "*" ];
		$select = new select();
		$sql = $select -> build_select_all_sql( self::get_table(), $option );
		$row = blastpad_database::fetch( $sql);

		return $row;
	}
}

?>