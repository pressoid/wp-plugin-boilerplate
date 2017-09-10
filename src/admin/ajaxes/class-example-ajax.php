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

namespace Plugin_Name\Admin\Ajaxes;

use Plugin_Name\Admin\Ajax;

/**
 * Class Example Ajax.
 *
 * Main class for ajaxes services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Example_Ajax extends Ajax {
	/**
	 * Renders ajax response.
	 *
	 * @return void
	 */
	public function render( array $data = [] )
	{
		return json_encode( $data );
	}

	/**
	 * Gets the tag name for the ajax action.
	 *
	 * @return string
	 */
	public function get_tag()
	{
		return 'example_ajax';
	}
}
