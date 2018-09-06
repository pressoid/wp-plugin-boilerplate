<?php
/**
 * WP Pożyczkomocni Plugin
 *
 * @package   Plugin_Name
 * @author    Tonik <hello@tonik.pl>
 * @license   GPL-3.0+
 * @link      //tonik.pl
 * @copyright 2018-present Pożyczkomocni
 */

namespace Plugin_Name\Taxonomy;

use Plugin_Name\Post_Type\Example_Post_Type;
use Plugin_Name\Foundation\Taxonomy\Taxonomy;

/**
 * Class Example Category Taxonomy.
 *
 * An example of custom taxonomy.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Taxonomy
 * @author  Your Name <email@example.com>
 */
class Example_Category_Taxonomy extends Taxonomy {
	/**
	 * Name of the service.
	 *
	 * @var string
	 */
	const NAME = 'example_category';

	/**
	 * List for post types where taxonomy belongs to.
	 *
	 * @return \Plugin_Name\Foundation\Post_Type\Post_Type[]
	 */
	function belongs_to() {
		return [
			Example_Post_Type::NAME,
		];
	}

	/**
	 * Get registration arguments for taxonomy.
	 *
	 * @return array
	 */
	public function get_labels() {
		return [
			'labels' => [
				'name'                       => _x( 'Categories', 'Taxonomy General Name', 'plugin_name' ),
				'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'plugin_name' ),
				'menu_name'                  => __( 'Category', 'plugin_name' ),
				'all_items'                  => __( 'All Categories', 'plugin_name' ),
				'parent_item'                => __( 'Parent Category', 'plugin_name' ),
				'parent_item_colon'          => __( 'Parent Category:', 'plugin_name' ),
				'new_item_name'              => __( 'New Category Name', 'plugin_name' ),
				'add_new_item'               => __( 'Add New Category', 'plugin_name' ),
				'edit_item'                  => __( 'Edit Category', 'plugin_name' ),
				'update_item'                => __( 'Update Category', 'plugin_name' ),
				'view_item'                  => __( 'View Category', 'plugin_name' ),
				'separate_items_with_commas' => __( 'Separate categories with commas', 'plugin_name' ),
				'add_or_remove_items'        => __( 'Add or remove categories', 'plugin_name' ),
				'choose_from_most_used'      => __( 'Choose from the most used', 'plugin_name' ),
				'popular_items'              => __( 'Popular Categories', 'plugin_name' ),
				'search_items'               => __( 'Search Categories', 'plugin_name' ),
				'not_found'                  => __( 'Not Found', 'plugin_name' ),
				'no_terms'                   => __( 'No categories', 'plugin_name' ),
				'items_list'                 => __( 'Categories list', 'plugin_name' ),
				'items_list_navigation'      => __( 'Categories list navigation', 'plugin_name' ),
			],
		];
	}

	/**
	 * Get texts for taxonomy's labels
	 *
	 * @return array
	 */
	public function get_arguments() {
		return [
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,
		];
	}
}
