<?php
class blastpad_blueprint{
	
	function get(){
		$setting = blastpad_setting::get();
		$blueprint = $setting[ "path" ][ "blueprint" ] . "blastpad/";
		return $blueprint;
	}
}
?>