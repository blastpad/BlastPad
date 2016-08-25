<span>Sign up to get early access.</span>
<form action="" class="subscriber_form" method="post">
	<?php if ( !empty ( $message ) ){ ?><div class="bp_message"><?php echo $message; ?></div><?php } ?>
	<input name="bp_form" type="hidden" value="subscribe">
	<input class="bp_text_field" name="subscriber_email" placeholder="Email address" type="email" required="required" />
	<input class="bp_call_to_action" name="sign_up" type="submit" value="Sign up!" />
</form>