<div class="wrap">

	<?php screen_icon(); ?>

	<form action="options.php" method="post" id="<?php echo $this->plugin_name; ?>_options_form" name="<?php echo $this->plugin_name; ?>_options_form">

		<?php settings_fields($this->plugin_name . '_options'); ?>

		<h2>User Allowed IP Addresses &raquo; Settings</h2>
		<p>If you have any questions or need support, please head over to <a href="https://wordpress.org/support/plugin/user-allowed-ip-addresses" target="_blank">https://wordpress.org/support/plugin/user-allowed-ip-addresses</a>.</p>
		<p>If you are looking for where to enter in IP Addresses for Users, you need to go to the specific user account and you will see a new field called IP Addresses.</p>
		<table class="widefat">
			<tfoot>
			<tr>
				<th><input type="submit" name="submit" value="Save Settings" class="button-primary" /></th>
			</tr>
			</tfoot>
			<tbody>
			<tr>
				<td>
					<label for="<?php echo $this->plugin_name .'_no_access_url' ?>">
						<p><strong>The URL of where you want folks that do not have access to get redirected to.</strong><br><small>By default it will redirect to Homepage.</small>  </p>
						<p><input placeholder="Enter URL" type="text" style="width:472px;height:24px;" name="<?php echo $this->plugin_name .'_no_access_url' ?>" value="<?php echo $noAccessUrl; ?>" /></p>
						<p><small>Example: If someone tries to login with a username and password and their IP address is not on list of approved IP Addresses.  The user will get redirected to the page above.</small></p>
					</label>
				</td>
			</tr>

			<tr>
				<td>
					<h3>Auto Login Feature</h3>
					<p>The auto login feature does exactly what it sounds like.  It will automatically login a user based on their IP Address.
						<br>You <strong>MUST</strong> specifiy a URL of what page you want the auto login to happen on.

					</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="<?php echo $this->plugin_name .'_auto_login' ?>">
						<p><input type="checkbox" name="<?php echo $this->plugin_name .'_auto_login' ?>" value='1' <?php checked( $autoLogin, 1); ?>> <strong>Enable the Auto Login Feature?</strong></p>
					</label>
				</td>
			</tr>

			<tr>
				<td>
					<label for="<?php echo $this->plugin_name .'_auto_login_url' ?>">
						<p><strong>Which URL would you like Auto Login to occur on?</strong></p>
						<p><input placeholder="Enter Full URL" type="text" style="width:472px;height:24px;" name="<?php echo $this->plugin_name .'_auto_login_url' ?>" value="<?php echo $autoLoginUrl; ?>" /></p>
						<p><small>Note: You must enter in the FULL URL of the page.</small></p>
					</label>
				</td>
			</tr>


			</tbody>
		</table>

	</form>
</div>