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

namespace Plugin_Name\Admin;

use RuntimeException;
use Plugin_Name\Plugin;
use Plugin_Name\Contracts\Service_Interface;

/**
 * Class Asset.
 *
 * Main class for asset services to inherit.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Asset implements Service_Interface {
	/**
	 * Gets a filepath of the asset.
	 *
	 * @throws RuntimeException If asset does not implement `get_filepath()` method.
	 * @return void
	 */
	public function get_filepath() {
		throw new RuntimeException( 'Asset does not implement `get_filepath()` method.' );
	}

	/**
	 * Gets a tag name for the asset.
	 *
	 * @throws RuntimeException If asset does not implement `get_tag()` method.
	 * @return void
	 */
	public function get_tag() {
		throw new RuntimeException( 'Asset does not implement `get_tag()` method.' );
	}

	/**
	 * Gets a collection of asset's dependencies.
	 *
	 * @return array
	 */
	public function get_dependencies() {
		return [];
	}

	/**
	 * Gets version of the asset.
	 *
	 * @return array
	 */
	public function get_version() {
		return Plugin::VERSION;
	}
}
