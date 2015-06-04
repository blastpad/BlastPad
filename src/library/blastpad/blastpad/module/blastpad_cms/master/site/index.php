<?php
/** 
 * Router for front end of the site.
 */

	global $database;
	global $site;
	$post = "";
	$option = [];
	
	$sql = "select post_meta_description, post_keywords, profile_id, post_title, 
		post_text, post_background_color, post_background_size
		from site, post
		where site.site_home_post_id = post.post_id";
		
	if ( !empty ( $site[ "site_id" ] ) ) {
		$sql .= " and site.site_id = :site_id";   //" . $site[ "site_id" ];
		$option[ "parameter" ] = [ ":site_id" => $site[ "site_id" ] ];
	}		
	
	$post = $database -> fetch( $sql, $option );
		
	/** Load the main page. */
	require_file ( blastpad_path . "/site/main.php" );

?>