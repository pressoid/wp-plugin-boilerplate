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

/*
|--------------------------------------------------------------
| Initialize a Plugin
|--------------------------------------------------------------
|
| Construct a plugin itself with instances collection
| of service providers so they will be later
| booted on plugin initialization.
|
*/
return new Plugin_Name\Plugin(
	[
		Plugin_Name\Page\Page_Service_Provider::class,
		Plugin_Name\Ajax\Ajax_Service_Provider::class,
		Plugin_Name\Asset\Asset_Service_Provider::class,
		Plugin_Name\Widget\Widget_Service_Provider::class,
		Plugin_Name\Shortcode\Shortcode_Service_Provider::class,
	]
);
