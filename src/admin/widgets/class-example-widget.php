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

namespace Plugin_Name\Admin\Widgets;

use Plugin_Name\Admin\Widget;

class Example_Widget extends Widget {
	/**
	 * @todo Change value of textdomain to your pugin unique name.
	 * @return void
	 */
	public function __construct() {
		parent::__construct(
			'plugin_name-widget',
			__( 'Plugin Widget', 'plugin_name' ),
			[
				'description' => __( 'Short description of the widget.', 'plugin_name' ),
			]
		);
	}

	/**
	 * @param array $arguments
	 * @param \WP_Widget $instance
	 */
	public function widget( $arguments, $instance ) {
	}

	/**
	 * @param \WP_Widget $instance
	 */
	public function form( $instance ) {
	}

	/**
	 * @param \WP_Widget $new_instance
	 * @param \WP_Widget $old_instance
	 */
	public function update( $new_instance, $old_instance ) {
	}
}
