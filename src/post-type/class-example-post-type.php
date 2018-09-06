<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Post_Type;

use Plugin_Name\Foundation\Service_Provider;

/**
 * Class Post_Type Service Provider.
 *
 * Registers defined post_type services.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Post_Type
 * @author  Your Name <email@example.com>
 */
class Example_Post_Type extends Post_Type {
	/**
	 * Name of the service.
	 *
	 * @var string
	 */
	const NAME = 'example_post_type';

	/**
	 * Gets registration arguments for post type.
	 *
	 * @return array
	 */
	public function get_labels() {
		return [
			'label'       => __( 'Posts', 'plugin_name' ),
			'description' => __( 'Posts', 'plugin_name' ),
			'labels'      => [
				'name'                  => _x( 'Posts', 'Post Type General Name', 'plugin_name' ),
				'singular_name'         => _x( 'Posts', 'Post Type Singular Name', 'plugin_name' ),
				'menu_name'             => __( 'Posts', 'plugin_name' ),
				'name_admin_bar'        => __( 'Posts', 'plugin_name' ),
				'archives'              => __( 'Posts Archives', 'plugin_name' ),
				'attributes'            => __( 'Post Attributes', 'plugin_name' ),
				'parent_item_colon'     => __( 'Parent Post:', 'plugin_name' ),
				'all_items'             => __( 'All Posts', 'plugin_name' ),
				'add_new_item'          => __( 'Add New Post', 'plugin_name' ),
				'add_new'               => __( 'Add New', 'plugin_name' ),
				'new_item'              => __( 'New Post', 'plugin_name' ),
				'edit_item'             => __( 'Edit Post', 'plugin_name' ),
				'update_item'           => __( 'Update Post', 'plugin_name' ),
				'view_item'             => __( 'View Post', 'plugin_name' ),
				'view_items'            => __( 'View Post', 'plugin_name' ),
				'search_items'          => __( 'Search Post', 'plugin_name' ),
				'not_found'             => __( 'Not found', 'plugin_name' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'plugin_name' ),
				'featured_image'        => __( 'Featured Image', 'plugin_name' ),
				'set_featured_image'    => __( 'Set featured image', 'plugin_name' ),
				'remove_featured_image' => __( 'Remove featured image', 'plugin_name' ),
				'use_featured_image'    => __( 'Use as featured image', 'plugin_name' ),
				'insert_into_item'      => __( 'Insert into post', 'plugin_name' ),
				'uploaded_to_this_item' => __( 'Uploaded to this post', 'plugin_name' ),
				'items_list'            => __( 'Posts list', 'plugin_name' ),
				'items_list_navigation' => __( 'Posts list navigation', 'plugin_name' ),
				'filter_items_list'     => __( 'Filter posts list', 'plugin_name' ),
			],
		];
	}

	/**
	 * Gets texts of post type's labels
	 *
	 * @return array
	 */
	public function get_arguments() {
		return [
			'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail' ],
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-tag',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
		];
	}
}
