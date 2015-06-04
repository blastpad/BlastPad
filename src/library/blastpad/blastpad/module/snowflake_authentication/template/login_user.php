<?php
namespace blastpad;
?>
<span class="message"><?php if ( !empty( $message ) ) { echo $message; } ?></span>
<form action="" class="login_form" method="post" >
	<span class="email">
		<span class="email_caption">Email:</span>
		<span class="email_input"><input class="email" name="user_name" required="required" type="email"></span>
	</span>
	<span class="password">
		<span class="password_caption">Password:</span>
		<span class="password"><input class="password" name="user_password" required="required" type="password"></span>
	</span>	
	<span class="submit"><input class="submit_button" name="login" type="submit" value="Login"></span>
</form>