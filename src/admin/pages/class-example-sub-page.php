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

class Example_Sub_Page extends Submenu_Page {
	/**
	 * Render settings page content.
	 *
	 * @return void
	 */
	public function render( array $data = [] ) {
	?>
		<div class="wrap">
			<h2><?php echo $this->get_title(); ?></h2>

			<?php settings_errors(); ?>

			<!-- Subpage inputs goes here. -->
		</div>
	<?php
	}

	/**
	 * Gets title of the sub page.
	 *
	 * @return string
	 */
	public function get_title() {
		return __( 'Submenu Page', Plugin::NAME );
	}
}
