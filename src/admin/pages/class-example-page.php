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
use Plugin_Name\Admin\Menu_Page;

/**
 * Class Example Menu Page.
 *
 * An example of concrete menu page implementation.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Example_Page extends Menu_Page {
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

			<!-- Page inputs goes here. -->
		</div>
	<?php
	}

	/**
	 * Gets title of the page.
	 *
	 * @return string
	 */
	public function get_title() {
		return __( 'Menu Page', Plugin::NAME );
	}
}
