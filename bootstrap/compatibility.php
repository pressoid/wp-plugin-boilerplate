<?php

/*
|--------------------------------------------------------------------------
| Example alert
|--------------------------------------------------------------------------
*/
if ( ! defined( 'PLUGIN_NAME_CONSTANS' ) ) {
	function plugin_name_compatibility_issue() {
		?>
		<div class="notice notice-error">
			<p><?php _e( '<b>Plugin Name</b> - Issue with description.', 'plugin-name' ); ?></p>
		</div>
		<?php
	}
	add_action( 'admin_notices', 'plugin_name_compatibility_issue' );

	return false;
}

// Everything is ok. Return positive status.
return true;
