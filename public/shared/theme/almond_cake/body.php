<?php
	//require_file( dirname(__FILE__) . "../../.." . blastpad_module_path . "/snowflake_authentication/index.php" ); 

	global $site;
	global $post;

?>
<link rel="stylesheet" href="shared/theme/almond_cake/css/barebones.css" type="text/css">
<link rel="stylesheet" href="shared/theme/almond_cake/css/style.css" type="text/css">
	
<div class="container">
	<div class="content">	
		<h1 class="logo"><?php echo sanitize( $site[ "site_name" ] ); ?></h1>
		<h2><?php echo sanitize( $site[ "site_tagline" ] ); ?></h2>
		<br />&nbsp;<br />
		
		<?php //require_once( dirname(__FILE__) . "../../../../../src/library/blastpad/blastpad/module/snowflake_authentication/subscribe/index.php" ); ?>
		
		<?php show_form( "create", "subscriber" ); ?>
		
		<br />&nbsp;<br />&nbsp;
		<br />&nbsp;<br />&nbsp;
		<br />&nbsp;<br />&nbsp;
		<br />&nbsp;<br />&nbsp;
		<br />&nbsp;<br />&nbsp;
	</div>		
	
	<div class="credit">
		<a href="http://blastpad.co" target="_blank">Powered by BlastPad</a>
	</div>
	
</div>	