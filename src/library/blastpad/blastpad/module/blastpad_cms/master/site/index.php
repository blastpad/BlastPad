<?php
/** 
 * Router for front end of the site.
 */

	global $database;
	global $site;
	$post = "";
	
	$post = $database -> fetch( "select post_meta_description, post_keywords, profile_id, post_title, 
		post_text, post_background_color, post_background_size
		from site, post
		where site.site_id = " . $site[ "site_id" ] . "
		and site.site_home_post_id = post.post_id" );
		
	/** Load the main page. */
	require_file ( blastpad_path . "/site/main.php" );

?>