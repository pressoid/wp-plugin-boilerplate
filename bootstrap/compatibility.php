<?php
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
			<p><?php echo esc_html( '[Plugin Name]: `PLUGIN_NAME_CONSTANS` constans is not defined.', 'plugin_name' ); ?></p>
		</div>
		<?php
	}
	add_action( 'admin_notices', 'plugin_name_compatibility_issue' );

	return false; // Something wrong. Abandon the ship.
}

return true; // Everything is ok.
