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

namespace Plugin_Name\Admin\Pages;

use Plugin_Name\Admin\Submenu_Page;

class Settings extends Submenu_Page {
	/**
	 * Render settings page content.
	 *
	 * @return void
	 */
	public function render() {
	?>
		<div class="wrap">
			<h2><?php echo __( 'Plugin Name', 'plugin-name' ); ?></h2>

			<?php settings_errors(); ?>

			<!-- Settings inputs goes here. -->
		</div>
	<?php
	}
}
