<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name;

/**
 * Class Autoloader.
 *
 * A custom autoloader that supports WPCS files naming convention.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Autoloader {
	/**
	 * Construct Autolader.
	 *
	 * @param string $root
	 * @param string $base_dir
	 */
	public function __construct( $root, $base_dir ) {
		$this->prefixes = [];
		$this->root     = $this->normalize_root( strval( $root ) );
		$this->base_dir = trailingslashit( strval( $base_dir ) );
	}

	/**
	 * Destructor for the Autoloader class.
	 *
	 * The destructor automatically unregisters the autoload
	 * callback function with the SPL autoload system.
	 */
	public function __destruct() {
		$this->unregister();
	}

	/**
	 * Register a prefix of filenames.
	 *
	 * @param string $prefix
	 *
	 * @return self
	 */
	public function add_prefix( $prefix ) {
		$this->prefixes = array_merge( $this->prefixes, [ "{$prefix}-" ] );

		return $this;
	}

	/**
	 * Registers the autoload callback with the SPL autoload system.
	 *
	 * @return void
	 */
	public function register() {
		spl_autoload_register( [ $this, 'autoload' ] );
	}

	/**
	 * Unregisters the autoload callback with the SPL autoload system.
	 *
	 * @return void
	 */
	public function unregister() {
		spl_autoload_unregister( [ $this, 'autoload' ] );
	}

	/**
	 * The autoload function that gets registered with the SPL Autoloader
	 * system.
	 *
	 * @param string $class The class that got requested by the spl_autoloader.
	 * @throws RuntimeException If the associated file is not readable.
	 */
	public function autoload( $class ) {
		// Escape on if the object does not belong to the current namespace.
		if ( 0 !== strpos( $class, $this->root ) ) {
			return;
		}

		// Remove namespace root level to correspond with root filesystem.
		$filename = str_replace( $this->root, '', $class );

		// Change underscores into hyphens.
		$filename = str_replace( '_', '-', $filename );

		// Change to lowercase.
		$filename = strtolower( $filename );

		foreach ( $this->get_naming_schema( $filename ) as $file ) {
			$file = "{$this->base_dir}{$file}.php";

			if ( file_exists( $file ) ) {
				require_once $file;

				// Break out of the loop and continue
				// as we found desired file.
				break;
			}
		}
	}

	/**
	 * Normalize a namespace root.
	 *
	 * @param string $root Namespace root that needs to be normalized.
	 * @return string Normalized namespace root.
	 */
	protected function normalize_root( $root ) {
		$root = $this->remove_leading_backslash( $root );

		return $this->add_trailing_backslash( $root );
	}

	/**
	 * Remove a leading backslash from a string.
	 *
	 * @param string $string String to remove the leading backslash from.
	 * @return string Modified string.
	 */
	protected function remove_leading_backslash( $string ) {
		return ltrim( $string, '\\' );
	}

	/**
	 * Make sure a string ends with a trailing backslash.
	 *
	 * @param string $string String to check the trailing backslash of.
	 * @return string Modified string.
	 */
	protected function add_trailing_backslash( $string ) {
		return rtrim( $string, '\\' ) . '\\';
	}

	/**
	 * Gets map of naming schema for pased filename.
	 *
	 * @param  string $filename
	 * @return array
	 */
	protected function get_naming_schema( $filename ) {
		return array_map(
			function ( $prefix ) use ( $filename ) {
				$parts   = explode( '\\', $filename );
				$parts[] = $prefix . array_pop( $parts );

				return strtolower( str_replace( '\\', DIRECTORY_SEPARATOR, implode( '\\', $parts ) ) );
			}, $this->prefixes
		);
	}
}
