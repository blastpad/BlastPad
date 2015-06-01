<?php 
/*
 * This is the head of the HTML document.  Not to be confused with header.php.   
 *
 */ 
 
global $site;
global $post;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo sanitize( $site[ "site_name" ] ); ?></title>
		<meta name="description" content="<?php echo sanitize( $post[ 0 ][ "post_meta_description" ] ); ?>">
		<meta name="keywords" content="<?php echo sanitize( $post[ 0 ][ "post_keywords" ] ); ?>">
		<meta name="author" content="<?php echo sanitize( $post[ 0 ][ "profile_id" ] ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--meta name="robots" content="noindex"-->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<!--link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
		<link rel="canonical" href="">
		<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml">
		<link rel="alternate" type="application/atom+xml" title="Atom" href="/atom.xml">
		<link rel="pingback" href=""-->
		
		<?php require_file ( blastpad_path . "/site/css_style.php" ); ?>
		
		<!--
		<meta property="og:title" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@site_account">
		<meta name="twitter:creator" content="@individual_account">
		<meta name="twitter:url" content="http://www.example.com/path/to/page.html">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="http://www.example.com/path/to/image.jpg"-->	
		<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
	</head>