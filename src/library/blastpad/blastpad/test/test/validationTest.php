<?php 

	class validationTest extends PHPUnit_Framework_TestCase{
		
		function __construct(){
			require_once (  dirname(__FILE__) . "../../../module/common/validation.php" );
		}
		
		public function test_validation_required(){
			$required_array = [
				"example_key" => "example_value",
			];
			check_required( $required_array );
		}
	}

?>