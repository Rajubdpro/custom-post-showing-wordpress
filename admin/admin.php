<?php
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Custom Post Showing', 'Post Type General Name', 'custom_post_showing' ),
		'singular_name'         => _x( 'Custom Post Showing', 'Post Type Singular Name', 'custom_post_showing' ),
		'menu_name'             => __( 'Custom Post Showing', 'custom_post_showing' ),
		'name_admin_bar'        => __( 'Post Type', 'custom_post_showing' ),
		'archives'              => __( 'Item Archives', 'custom_post_showing' ),
		'attributes'            => __( 'Item Attributes', 'custom_post_showing' ),
		'parent_item_colon'     => __( 'Parent Item:', 'custom_post_showing' ),
		'all_items'             => __( 'All Items', 'custom_post_showing' ),
		'add_new_item'          => __( 'Add New Item', 'custom_post_showing' ),
		'add_new'               => __( 'Add New', 'custom_post_showing' ),
		'new_item'              => __( 'New Item', 'custom_post_showing' ),
		'edit_item'             => __( 'Edit Item', 'custom_post_showing' ),
		'update_item'           => __( 'Update Item', 'custom_post_showing' ),
		'view_item'             => __( 'View Item', 'custom_post_showing' ),
		'view_items'            => __( 'View Items', 'custom_post_showing' ),
		'search_items'          => __( 'Search Item', 'custom_post_showing' ),
		'not_found'             => __( 'Not found', 'custom_post_showing' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'custom_post_showing' ),
		'featured_image'        => __( 'Featured Image', 'custom_post_showing' ),
		'set_featured_image'    => __( 'Set featured image', 'custom_post_showing' ),
		'remove_featured_image' => __( 'Remove featured image', 'custom_post_showing' ),
		'use_featured_image'    => __( 'Use as featured image', 'custom_post_showing' ),
		'insert_into_item'      => __( 'Insert into item', 'custom_post_showing' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'custom_post_showing' ),
		'items_list'            => __( 'Items list', 'custom_post_showing' ),
		'items_list_navigation' => __( 'Items list navigation', 'custom_post_showing' ),
		'filter_items_list'     => __( 'Filter items list', 'custom_post_showing' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'custom_post_showing' ),
		'description'           => __( 'Post Type Description', 'custom_post_showing' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );