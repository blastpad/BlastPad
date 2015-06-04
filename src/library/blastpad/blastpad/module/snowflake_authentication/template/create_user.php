<?php
namespace blastpad;
?>
<span class="message"><?php if ( !empty( $message ) ) { echo $message; } ?></span>
<form action="" class="login_form" method="post" >
	<span class="email">
		<span class="email_caption">Email:</span>
		<span class="email_input"><input class="email" name="email" required="required" type="email"></span>
	</span>
	<span class="password">
		<span class="password_caption">Password:</span>
		<span class="password"><input class="password" name="user_password" required="required" type="password"></span>
	</span>	
	<span class="confirm_password">
		<span class="confirm_password_caption">Confirm password:</span>
		<span class="confirm_password_input"><input class="confirm_password" name="confirm_password" required="required" type="text"></span>
	</span>
	<span class="submit"><input class="submit_button" name="login" type="submit" value="Register"></span>
</form>