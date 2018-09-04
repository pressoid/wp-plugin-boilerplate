<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Foundation\Exception;

use InvalidArgumentException;

/**
 * Exception for invalid service.
 *
 * Exception for recognized services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Foundation
 * @author  Your Name <email@example.com>
 */
class Not_Recognized_Service_Exception extends InvalidArgumentException {
}
