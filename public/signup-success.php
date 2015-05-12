<?php require_once( dirname(__FILE__) . "../../customize.php" ); ?>
<?php require_once( dirname(__FILE__) . "../../script/module/common/validation.php" ); ?>

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
			
			<span><?php echo sanitize( $confirmation_message ); ?></span><br />
			<br />
			<!-- Social media buttons. -->
			
				<!-- Twitter share button. -->
				<a href="https://twitter.com/share" target="_blank"><img src="image/social-media/twitter.jpg" width="48"></a>
			
				<!-- Facebook share button. -->
				<a href="https://www.facebook.com/sharer/sharer.php" target="_blank"><img src="image/social-media/facebook.png" width="48"></a>
					
				<p>&nbsp;</p>
				
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