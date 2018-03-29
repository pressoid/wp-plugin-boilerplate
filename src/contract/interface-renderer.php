<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Contract;

/**
 * Interface of Renderer.
 *
 * Subject with ability to render.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Contract
 * @author  Your Name <email@example.com>
 */
interface Renderer_Interface {
	/**
	 * Renders current subject.
	 *
	 * @param  array $data
	 * @return void
	 */
	public function render( $data = [] );
}
