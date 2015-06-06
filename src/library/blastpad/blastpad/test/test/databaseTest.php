<?php 

	class database_test extends PHPUnit_Framework_TestCase{
		
		public function test_database_connect(){
			require_once ( dirname(__FILE__) . "../../../../../../../custom/config.php" );		
			$server_environment = "production";

			require_once ( dirname(__FILE__) . "../../../module/calliope_database/class/database_class.php" );
			require_once ( dirname(__FILE__) . "../../../module/calliope_database/class/data_source_name_class.php" );
			
			$database = new \blastpad\database( $database_connection, $server_environment );
		}
	}

?>