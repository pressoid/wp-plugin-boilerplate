<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Taxonomy;

use Plugin_Name\Foundation\Service;

/**
 * Class Taxonomy.
 *
 * Main class for taxonomy classes to extend.
  *
 * @package Plugin_Name\Foundation
 */
abstract class Taxonomy extends Service {
	/**
	 * Gets list for post type where taxonomy belongs to.
	 *
	 * @return \Plugin_Name\Foundation\Post_Type\Post_Type[]
	 */
	abstract public function belongs_to();

	/**
	 * Gets texts of post type's labels
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
		register_taxonomy(
			$this->get_name(),
			$this->belongs_to(),
			array_merge( $this->get_labels(), $this->get_arguments() )
		);
	}
}
