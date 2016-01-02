<div class="bp_container bp_narrow">
	<div>
		<p class="bp_large_break">&nbsp;</p>
		<div class="bp_center_justify">
			<h1>BlastPad</h1>
			<p>Login to your account.</p>
			<span class="bp_message"><?php if ( isset( $bp_message ) ){ echo $bp_message; }?></span>
		</div>
		<form action="" class="bp_form bp_center bp_border" method="post">
			<input name="bp_form" type="hidden" value="login">
			<input type="hidden" name="bp_token" value="<?php if ( isset( $blastpad_token ) ){ echo $blastpad_token; }?>" />
			<span> 
				<input class="bp_field" name="member_email" placeholder="Email Address" required="required" type="email" />
			</span>
			<br />
			<span>
				<input class="bp_field" name="passphrase" placeholder="Password" required="required" type="password" />
			</span>
			<p class="bp_small_break">&nbsp;</p>
			<span><input class="bp_submit_button bp_full" name="login" type="submit" value="Sign in" /></span>
		</form>
		<div class="bp_small_text">
			New to BlastPad?  <a class="bp_link" href="register">Sign up!</a>
		</div>
	</div>	
</div>