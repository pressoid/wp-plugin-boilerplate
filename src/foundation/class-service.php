<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation;

use Plugin_Name\Contract\Service as Interface_Service;

/**
 * Class Service.
 *
 * General class for defining services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
abstract class Service implements Interface_Service {
	/**
	 * Gets name of the service.
	 *
	 * @throws RuntimeException If service does not defines `NAME` constans.
	 * @return string
	 */
	public function get_name() {
		if ( defined( 'static::NAME' ) ) {
			return static::NAME;
		}

		throw new RuntimeException( 'Service does not define `NAME` constans.' );
	}
}
