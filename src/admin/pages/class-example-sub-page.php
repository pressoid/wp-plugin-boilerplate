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

use Plugin_Name\Plugin;
use Plugin_Name\Admin\Submenu_Page;

/**
 * Class Example Submenu Page.
 *
 * An example of concrete submenu page implementation.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Example_Sub_Page extends Submenu_Page {
	/**
	 * Render settings page content.
	 *
	 * @return void
	 */
	public function render( $data = [] ) {
	?>
		<div class="wrap">
			<h2><?php echo $this->get_title(); ?></h2>

			<?php settings_errors(); ?>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, consectetur sed debitis, libero ut obcaecati ipsa.</p>

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

	/**
	 * Gets name of the parent menu page.
	 *
	 * @return string
	 */
	public function get_parent()
	{
		return Plugin::NAME;
	}

	/**
	 * Gets slug of the menu page.
	 *
	 * @return string
	 */
	public function get_slug()
	{
		return Plugin::NAME . '-submenu-page';
	}
}
