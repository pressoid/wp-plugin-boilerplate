<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Post_Type;

use Plugin_Name\Foundation\Service;

/**
 * Class Post Type.
 *
 * Main class for post type classes to extend.
  *
 * @package Plugin_Name\Foundation
 */
abstract class Post_Type extends Service {
	/**
	 * Gets texts for post type's labels
	 *
	 * @return array
	 */
	abstract public function get_labels();

	/**
	 * Gets registration arguments for post type.
	 *
	 * @return array
	 */
	abstract public function get_arguments();

	/**
	 * Adds a post type inside WordPress.
	 *
	 * @return void
	 */
	public function register() {
		register_post_type(
			$this->get_name(),
			array_merge( $this->get_labels(), $this->get_arguments() )
		);
	}
}
