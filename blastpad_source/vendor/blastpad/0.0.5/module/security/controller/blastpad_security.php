<?php 

class blastpad_security {
	
	function __construct(){
		$this->set_setting();
		$this->set_header();
		$this->set_referrer();
		$this->set_utf8();	
	}
	
	// Set PHP ini settings.
	private function set_setting(){
		// Prevent exposing cookies to client-side scripting such as JavaScript.
		ini_set( "session.cookie_httponly", 1 );						// HTTPOnly cookie flag.  For security, needs to be called before session start.
		
		ini_set( "session.cookie_lifetime", 0 );						// Delete cookies when browser is terminated.
		ini_set( "session.use_only_cookies", 1 );						// Only use cookies for sessions.  Prevent session ID from getting sent as a GET parameter.
		ini_set( "session.use_strict_mode", "on" );						// Rejects session ID provided by users.
		ini_set( "session.use_trans_sid", "off" );						// Disable transparent sessions.
		ini_set( "session.cache_limiter", "nocache" );					// Don't cache HTTP contents for authenticated session.
		ini_set( "session.hash_function", "sha512" );					// Use sha512 to hash sessions.

		//ini_set( "session.referer_check", "[your originating URL]" );	// Set referrer to website.		
		//ini_set( "session.cookie_secure", 1 );						// Send cookies only over secure connections.		
	}
	
	// Set HTML headers.
	private function set_header(){
		// Adds X-Frame-Options to HTTP header, so that page can only be shown in an iframe of the same site.
		header( "X-Frame-Options: SAMEORIGIN" ); 			// Firefox 3.6.9+, Chrome 4.1+, Internet Explorer 8+, Safari 4+, Opera 10.5+
		
		// Adds the Content-Security-Policy to the HTTP header.
		// JavaScript will be restricted to the same domain as the page itself.
		//header( "Content-Security-Policy: default-src 'self'; script-src 'self';" ); // Firefox 23+, Chrome 25+, Safari 7+, Opera 19+
		//header( "X-Content-Security-Policy: default-src 'self'; script-src 'self';" ); // Internet Explorer 10+

		// Adds the HTTP Strict Transport Security (HSTS) (remember it for 1 year)
		$is_https = !empty( $_SERVER[ "HTTPS" ] ) && strtolower( $_SERVER[ "HTTPS"] ) != "off";
		if ( $is_https ){
			header( "Strict-Transport-Security: max-age=31536000" ); // For Firefox 4, Chrome 4.0.211, Opera 12
		}
	}
	
	// Set referring page cookie.
	private function set_referrer(){
		// Set referring page cookie.
		$blastpad_cookie = new blastpad_cookie();
		if ( isset( $_SERVER[ "HTTP_REFERER" ] ) ){
			if ( !isset( $_COOKIE[ "blastpad_referrer" ] ) ){
				$blastpad_cookie->set( "blastpad_referrer", filter_var ( $_SERVER[ "HTTP_REFERER" ], FILTER_SANITIZE_URL ) );
			}
		}
	}
	
	// Set encoding to UTF-8.
	private function set_utf8(){
		mb_internal_encoding( "UTF-8" );			// Set encoding to UTF-8.
		mb_http_output( "UTF-8" );					// Output UTF-8 to browser.
	}
}
?>