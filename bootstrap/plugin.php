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
| Create a Service Provider for Pages
|--------------------------------------------------------------
|
| Construct a provider with collection of page services
| to register. Each service here should extend base
| `Menu_Page` or `Submenu_Page` classes.
|
*/
$pages = new Plugin_Name\Providers\Pages_Service_Provider(
	[
		Plugin_Name\Admin\Pages\Example_Page::class,
		Plugin_Name\Admin\Pages\Example_Sub_Page::class
	]
);

/*
|--------------------------------------------------------------
| Create a Service Provider for Assets
|--------------------------------------------------------------
|
| Construct a provider with collection of asset services
| to register. Each service here should extend base
| `Script` or `Stylesheet` classes.
|
*/
$assets = new Plugin_Name\Providers\Assets_Service_Provider(
	[
		Plugin_Name\Admin\Assets\Example_Script::class,
		Plugin_Name\Admin\Assets\Example_Stylesheet::class
	]
);

/*
|--------------------------------------------------------------
| Create a Service Provider for Ajaxes
|--------------------------------------------------------------
|
| Construct a provider with collection of shortcodes
| services to register. Each service here should
| extend base `Ajax` class.
|
*/
$ajaxes = new Plugin_Name\Providers\Ajaxes_Service_Provider(
	[
		Plugin_Name\Admin\Ajaxes\Example_Ajax::class,
	]
);

/*
|--------------------------------------------------------------
| Create a Service Provider for Widgets
|--------------------------------------------------------------
|
| Construct a provider with collection of widget
| services to register. Each service here
| should extend base `Widget` class.
|
*/
$widgets = new Plugin_Name\Providers\Widgets_Service_Provider(
	[
		Plugin_Name\Admin\Widgets\Example_Widget::class,
	]
);

/*
|--------------------------------------------------------------
| Create a Service Provider for Shortcodes
|--------------------------------------------------------------
|
| Construct a provider with collection of shortcodes
| services to register. Each service here should
| extend base `Shortcode` class.
|
*/
$shortcodes = new Plugin_Name\Providers\Shortcodes_Service_Provider(
	[
		Plugin_Name\Admin\Shortcodes\Example_Shortcode::class,
	]
);

/*
|--------------------------------------------------------------
| Initialize a Plugin
|--------------------------------------------------------------
|
| Finally, construct a plugin itself. We have to pass
| all previously created service providers so they
| will be later booted on plugin initialization.
|
*/
return new Plugin_Name\Plugin(
	[
		$pages,
		$assets,
		$ajaxes,
		$widgets,
		$shortcodes,
	]
);
