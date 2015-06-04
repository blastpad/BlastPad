<?php
namespace blastpad;
?>
<span class="call-to-action">Sign up to get early access.</span>
<form action="" class="subscriber-form" method="post">
	<input class="subscriber-email" name="subscriber_email" placeholder="Email address" required="required" type="email">
	<input name="sign-up" type="submit" value="Sign up!">
	<div class="message"><?php if ( !empty ( $message ) ){ echo $message; } ?></div>
</form>
