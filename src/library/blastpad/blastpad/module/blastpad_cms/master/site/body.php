<?php 
/*
 * This is the body of the HTML document.
 *
 */ ?>

<body>
<div class="main">
	<div class="main_inner_container">
		<?php 
			global $template;
			$template -> load_file( "header" ); 
			$template -> load_file( "loop" );
			$template -> load_file( "footer" );
		?>
	</div>
</div>
</body>