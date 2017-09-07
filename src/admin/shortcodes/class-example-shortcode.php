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

namespace Plugin_Name\Admin\Shortcodes;

use Plugin_Name\Admin\Shortcode;

class Example_Shortcode extends Shortcode {
	public function render( array $data = [] )
	{
		# code...
	}

	public function get_tag()
	{
		return 'example_shortcode';
	}
}
