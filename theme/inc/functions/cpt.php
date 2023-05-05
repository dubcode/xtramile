<?php
// Register Results Custom Post Type
function result_post_type() {

	$labels = array(
		'name'                  => _x( 'Results', 'Post Type General Name', 'emd' ),
		'singular_name'         => _x( 'Result', 'Post Type Singular Name', 'emd' ),
		'menu_name'             => __( 'Results', 'emd' ),
		'name_admin_bar'        => __( 'Results', 'emd' ),
		'archives'              => __( 'Item Archives', 'emd' ),
		'attributes'            => __( 'Item Attributes', 'emd' ),
		'parent_item_colon'     => __( 'Parent Item:', 'emd' ),
		'all_items'             => __( 'All Items', 'emd' ),
		'add_new_item'          => __( 'Add New Item', 'emd' ),
		'add_new'               => __( 'Add New', 'emd' ),
		'new_item'              => __( 'New Item', 'emd' ),
		'edit_item'             => __( 'Edit Item', 'emd' ),
		'update_item'           => __( 'Update Item', 'emd' ),
		'view_item'             => __( 'View Item', 'emd' ),
		'view_items'            => __( 'View Items', 'emd' ),
		'search_items'          => __( 'Search Item', 'emd' ),
		'not_found'             => __( 'Not found', 'emd' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'emd' ),
		'featured_image'        => __( 'Featured Image', 'emd' ),
		'set_featured_image'    => __( 'Set featured image', 'emd' ),
		'remove_featured_image' => __( 'Remove featured image', 'emd' ),
		'use_featured_image'    => __( 'Use as featured image', 'emd' ),
		'insert_into_item'      => __( 'Insert into item', 'emd' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'emd' ),
		'items_list'            => __( 'Items list', 'emd' ),
		'items_list_navigation' => __( 'Items list navigation', 'emd' ),
		'filter_items_list'     => __( 'Filter items list', 'emd' ),
	);
	$args = array(
		'label'                 => __( 'Result', 'emd' ),
		'description'           => __( 'Post Type Description', 'emd' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'show_in_rest'          => true // Gutenberg editor enabled.
	);
	register_post_type( 'results', $args );

}
add_action( 'init', 'result_post_type', 0 );

//======================================================
//  ______      _             __  __ _ _       __      __                        _           
// |  ____|    | |           |  \/  (_) |      \ \    / /                       (_)          
// | |__  __  _| |_ _ __ __ _| \  / |_| | ___   \ \  / /_ _  ___ __ _ _ __   ___ _  ___  ___ 
// |  __| \ \/ / __| '__/ _` | |\/| | | |/ _ \   \ \/ / _` |/ __/ _` | '_ \ / __| |/ _ \/ __|
// | |____ >  <| |_| | | (_| | |  | | | |  __/    \  / (_| | (_| (_| | | | | (__| |  __/\__ \
// |______/_/\_\\__|_|  \__,_|_|  |_|_|_|\___|     \/ \__,_|\___\__,_|_| |_|\___|_|\___||___/
//
// Register everything we need for the ExtraMile Vacancies
//======================================================
function vacancy_post_type() {
    $labels = array(
        'name'               => _x( 'Vacancies', 'post type general name', 'emd' ),
        'singular_name'      => _x( 'Vacancy', 'post type singular name', 'emd' ),
        'menu_name'          => _x( 'Vacancies', 'admin menu', 'emd' ),
        'name_admin_bar'     => _x( 'Vacancy', 'add new on admin bar', 'emd' ),
        'add_new'            => _x( 'Add New', 'vacancy', 'emd' ),
        'add_new_item'       => __( 'Add New Vacancy', 'emd' ),
        'new_item'           => __( 'New Vacancy', 'emd' ),
        'edit_item'          => __( 'Edit Vacancy', 'emd' ),
        'view_item'          => __( 'View Vacancy', 'emd' ),
        'all_items'          => __( 'All Vacancies', 'emd' ),
        'search_items'       => __( 'Search Vacancies', 'emd' ),
        'parent_item_colon'  => __( 'Parent Vacancies:', 'emd' ),
        'not_found'          => __( 'No vacancies found.', 'emd' ),
        'not_found_in_trash' => __( 'No vacancies found in Trash.', 'emd' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'emd' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'vacancy' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'show_in_rest'          => true // Gutenberg editor enabled.
    );
    register_post_type( 'vacancy', $args );
}
add_action( 'init', 'vacancy_post_type' );
                                                                            
                                                                            
?>