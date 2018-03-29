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

namespace Plugin_Name\Page;

use Plugin_Name\Plugin;
use Plugin_Name\Foundation\Page\Menu_Page;

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
	 * Name of the service.
	 *
	 * @var string
	 */
	const NAME = 'plugin_name_example_page';

	/**
	 * Render settings page content.
	 *
	 * @return void
	 */
	public function render( $data = [] ) {
	?>
		<div class="wrap">
			<h2><?php echo esc_html( $this->get_title() ); ?></h2>

			<?php settings_errors(); ?>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, consectetur sed debitis, libero ut obcaecati ipsa.</p>

			<!-- Page inputs goes here. -->
		</div>
	<?php
	}

	/**
	 * Gets title of the page.
	 *
	 * @todo Change value of textdomain to your pugin unique name.
	 * @return string
	 */
	public function get_title() {
		return __( 'Menu Page', 'plugin_name' );
	}
}
