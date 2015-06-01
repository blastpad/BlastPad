<?php
	global $template;
	$template = new template();
	
	$template -> load_file( "head" );
	$template -> load_file( "body" );
	$template -> load_file( "foot" );

?>