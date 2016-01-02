<div class="bp_container bp_narrow">
	<div>
		<p class="bp_large_break">&nbsp;</p>
		<div class="bp_center_justify">
			<h1>BlastPad</h1>
			<p>Sign up for a new account.</p>	
			<span class="bp_message"><?php if ( isset( $bp_message ) ){ echo $bp_message; }?></span>	
		</div>
		   
		<form action="" class="bp_form bp_center bp_border" method="post">
			<input name="bp_form" type="hidden" value="register">
			<span>
				<input class="bp_field" name="member_name" placeholder="User name"  /><!--required="required" type="text"-->
			</span>
			<br />
			<span>			
				<input class="bp_field" name="passphrase" placeholder="Password"  /><!--required="required" type="password"-->
			</span>
			<br />
			<span>
				<input class="bp_field" name="member_email" placeholder="Email address"  /><!--required="required" type="email"-->
			</span>

			<p class="bp_small_break">&nbsp;</p>
			<span class="bp_submit"><input class="bp_submit_button bp_full" name="register" type="submit" value="Sign up" /></span>
		</form>
		<div class="bp_small_text">
			Already have an account?  <a class="bp_link" href="login">Sign in!</a>
		</div>
	</div>
</div>