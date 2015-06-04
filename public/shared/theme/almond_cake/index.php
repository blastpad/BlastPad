<?php
	require_file( dirname(__FILE__) . "../../.." . blastpad_module_path . "/snowflake_authentication/index.php" ); 
?>
<!DOCTYPE html>
<head>
	<title><?php echo $title ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $tagline ?>">
	<meta name="keywords" content="website, cms, blog, content management system, blogging platform, web, responsive, design, free">
	<link rel="stylesheet" href="blastpad/css/barebones.css" type="text/css">
	<link rel="stylesheet" href="blastpad/css/style.css" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Ubuntu,Raleway" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
	<div class="main-inner-container">
		<div class="container">
			<div class="content">	
				<h1 class="logo"><?php echo sanitize( $title ); ?></h1>
				<h2><?php echo sanitize( $tagline ); ?></h2>
				<br />&nbsp;<br />

				<?php //require_once( dirname(__FILE__) . "../../src/library/blastpad/blastpad/module/snowflake_authentication/subscribe/index.php" ); ?>
				
				<?php //show_form( "create", "subscriber" ); ?>
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
	
	<footer>

	</footer>		
	</div>
	
</div>
</body>
</html>