<?php
namespace blastpad;

class view {
	
    protected $_data = array();

    public function __construct()
    {

    }

	public function __get( $name ){
        if ( array_key_exists( $name, $this->_data ) ) {
            return $this -> _data[$name];
        }
    }	
	
    public function set( $key, $value )
    {
        $this -> _data[$key] = $value;
    }

	public function render( $template_file, array $vars = array() ){
		ob_start();
		extract( $vars );
		require_once ( $template_file );
		$content = ob_get_contents();
		ob_get_clean();
		return $content;
   }	

    function assign( $key, $value ) {
        $this -> data[ $key ] = $value;
    }	
	
}
?>