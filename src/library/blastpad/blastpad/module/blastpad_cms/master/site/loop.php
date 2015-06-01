<?php global $post ?>
<div class="container">
	<h1 class="title"><?php echo sanitize( $post[ 0 ][ "post_title" ] ); ?></h1>
	<span><?php echo sanitize( $post[ 0 ][ "post_text" ] ); ?></span>
</div>	