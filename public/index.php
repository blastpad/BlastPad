<?php 
	require_once( dirname(__FILE__) . "../../customize.php" ); 
	require_once( dirname(__FILE__) . "../../script/module/common/validation.php" );
?>
<!DOCTYPE html>
<head>
	<title><?php echo $title ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $tagline ?>">
	<meta name="keywords" content="website, cms, blog, content management system, blogging platform, web, responsive, design, free">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Ubuntu,Raleway" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
	<div class="main-inner-container">
		<div class="container">
			<p>&nbsp;</p>
			<h1 class="title"><?php echo sanitize( $title ); ?></h1>
			<h2><?php echo sanitize( $tagline ); ?></h2>
			<p>&nbsp;</p>
			
			<?php require_once( dirname(__FILE__) . "../../script/module/snowflake-authentication/subscribe/index.php" ); ?>
			
			<div class="credit">
				<a href="http://silverhoneymedia.com" target="_blank">Powered by SilverHoneyMedia</a>
			</div>
			
		</div>		
	
	<footer>
		
		<script src="javascript/analytics.js"></script>

	</footer>		
	</div>
	
</div>
</body>
</html>