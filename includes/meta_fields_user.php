<?php

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/twitter.png" align="absmiddle" /> <label for="twitter">Twitter</label></th>
			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/facebook.png" align="absmiddle" /> <label for="facebook">Facebook</label></th>
			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Facebook ID.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/flickr.png" align="absmiddle" /> <label for="facebook">Flickr</label></th>
			<td>
				<input type="text" name="flickr" id="flickr" value="<?php echo esc_attr( get_the_author_meta( 'flickr', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Flickr Screename.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/flickr.png" align="absmiddle" /> <label for="flickr_api_key">Your Flickr API Key</label></th>
			<td>
				<input type="text" name="flickr_api_key" id="flickr_api_key" value="<?php echo esc_attr( get_the_author_meta( 'flickr_api_key', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Linkedin Profile URL.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/linkedin.png" align="absmiddle" /> <label for="linkedin">Linkedin</label></th>
			<td>
				<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Linkedin Profile URL.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/lastfm.png" align="absmiddle" /> <label for="lastfm">Last FM</label></th>
			<td>
				<input type="text" name="lastfm" id="lastfm" value="<?php echo esc_attr( get_the_author_meta( 'lastfm', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Last FM username.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/digg.png" align="absmiddle" /> <label for="digg">Digg</label></th>
			<td>
				<input type="text" name="digg" id="digg" value="<?php echo esc_attr( get_the_author_meta( 'digg', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Digg username.</span>
			</td>
		</tr>
		<tr>
			<th><img src="<?php bloginfo('template_url');?>/i/delicious.png" align="absmiddle" /> <label for="delicious">Delicious</label></th>
			<td>
				<input type="text" name="delicious" id="delicious" value="<?php echo esc_attr( get_the_author_meta( 'delicious', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Delicous username.</span>
			</td>
		</tr>
	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
	update_usermeta( $user_id, 'lastfm', $_POST['lastfm'] );
	update_usermeta( $user_id, 'digg', $_POST['digg'] );
	update_usermeta( $user_id, 'delicious', $_POST['delicious'] );	
	update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
	update_usermeta( $user_id, 'linkedin', $_POST['linkedin'] );
	update_usermeta( $user_id, 'flickr', $_POST['flickr'] );
	update_usermeta( $user_id, 'flickr_api_key', $_POST['flickr_api_key'] );
}