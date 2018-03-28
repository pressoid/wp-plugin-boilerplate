<?php

use Plugin_Name\Plugin;
/**
 * WP Plugin Boilerplate.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

if ( ! defined( 'PLUGIN_NAME_CONSTANS' ) ) {
	/**
	 * Displays admin error notice about issue.
	 *
	 * @todo Change value of textdomain to your pugin unique name.
	 * @return void
	 */
	function plugin_name_compatibility_issue() {
		?>
		<div class="notice notice-error">
			<p><?php esc_html_e( '<b>Plugin Name</b> - Issue with description.', 'plugin_name' ); ?></p>
		</div>
		<?php
	}
	add_action( 'admin_notices', 'plugin_name_compatibility_issue' );

	// Something wrong. Abort.
	return false;
}

// Everything is ok.
return true;
