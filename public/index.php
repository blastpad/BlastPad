<?php 
	require_once( dirname(__FILE__) . "../../custom/customize.php" ); 
	require_once( dirname(__FILE__) . "../../src/library/blastpad/blastpad/module/common/validation.php" );
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
			
			<?php require_once( dirname(__FILE__) . "../../src/library/blastpad/blastpad/module/snowflake_authentication/subscribe/index.php" ); ?>
			
			<div class="credit">
				<a href="http://blastpad.co" target="_blank">Powered by BlastPad</a>
			</div>
			
		</div>		
	
	<footer>
		
		<script>  
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', '<?php echo sanitize( $google_analytics_code ); ?>', 'auto');
			  ga('send', 'pageview');
		</script>

	</footer>		
	</div>
	
</div>
</body>
</html>