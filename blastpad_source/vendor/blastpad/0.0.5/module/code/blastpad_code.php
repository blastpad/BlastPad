<?php 

class blastpad_code {
	
	function get( $data = "" ){
		if ( file_exists( $data ) ) {
			$data = file_get_contents( $data );
			
			// Replace < with &lt;.
			$data = preg_replace( "/</", "&lt;", $data );
			
			// Replace > with &gt;.
			$data = preg_replace( "/>/", "&gt;", $data );
			
			return $data;
		}	
	}
	
	function get_documentation( $data, $start = "/**", $end = "*/" ){
		if ( file_exists( $data ) ) {
			$offset = 0;
			$output = "";
			$data = file_get_contents( $data );
			
			while ( ( $position = strpos( $data, $start, $offset ) ) !== FALSE ) {
		
				$temp1 = $position + strlen( $start );
				$result = substr( $data, $temp1, strlen( $data ));
				$dd = strpos( $result, $end );
				if ( $dd == 0 ){
					$dd = strlen( $result );
				}
				$offset = $position + 1;
				$output .= substr( $result, 0, $dd );
			}

			return $output;
		}	
	}
}

?>