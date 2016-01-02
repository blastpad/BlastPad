<?php 

class blastpad_minifier {
	
	function minify( $filename = array(), $option = array() ){	
		header( "Content-type: text/css; charset: UTF-8" );
		$data = "";
		foreach ( $filename as $file ){
			// Check if file exists before proceeding.
			if ( file_exists( $file ) ) {
				$file = file_get_contents( $file );
				if ( true === $option[ "minify" ] ){
					$data .= $this->process( $file );
				} else {
					$data .= $file;
				}
			}	
		}		
		return $data;
	}
	
	private function process( $data ){
		// Remove tabs.
		$data = preg_replace( "/\t/", "", $data );
		
		// Remove new lines.
		$data = preg_replace( "/[\r\n]+/", "", $data );
		
		// Remove extra white spaces.
		$data = preg_replace( "/\s\s+/", "", $data);
		
		return $data;	
	} 
	
}

?>