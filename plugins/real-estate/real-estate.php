<?php
/**
 * Plugin Name: Real estate
 * Plugin URI: http://wordpress.org/plugins/real-estate/
 * Description: add agents and properties in admin dashboard
 * Author: Nguyen Louis
 * 
 */

//Templates pour les articles seuls
//Templates pour les articles seuls des Agents
function agents_custom_post_type() {
	register_post_type('agents',
		array(
			'labels'      => array(
				'name'          => __('Agents', 'textdomain'),
				'singular_name' => __('Agents', 'textdomain'),
			),
                'menu_position'=> 4,
				'public'       => true,
				'has_archive'  => true,
                'menu_icon'    => 'dashicons-admin-users',
                'supports'=>
                [
                    'title',
                    'editor',
                    'thumbnail',
                    'comments',
                ]
		)
	);



//Templates pour les articles seuls des Properties
function properties_custom_post_type() {
    register_post_type('properties',
    array(
        'labels'      => array(
            'name'          => __('Properties', 'textdomain'),
            'singular_name' => __('Properties', 'textdomain'),
        ),
    'menu_position'=> 5,
    'public'      => true,
    'has_archive' => true,
    'rewrite' => true,
    'menu_icon'    => 'dashicons-building',
    'taxonomies' => array('types','purposes'),
    'supports'=>
    [
        'title',
        'editor',
        'thumbnail',
    ]
    )
);


//Taxonomies pour les articles seuls des Properties
//Category Types
register_taxonomy('Types', ['properties'], [
    'label' => __('Types', 'txtdomain'),
    'hierarchical' => true,
    'rewrite' => ['slug' => 'types'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
        'singular_name' => __('Types', 'txtdomain'),
        'all_items' => __('All Types', 'txtdomain'),
        'edit_item' => __('Edit Types', 'txtdomain'),
        'view_item' => __('View Types', 'txtdomain'),
        'update_item' => __('Update Types', 'txtdomain'),
        'add_new_item' => __('Add New Types', 'txtdomain'),
        'new_item_name' => __('New Types Name', 'txtdomain'),
        'search_items' => __('Search Types', 'txtdomain'),
        'parent_item' => __('Parent Types', 'txtdomain'),
        'parent_item_colon' => __('Parent Types:', 'txtdomain'),
        'not_found' => __('No Types found', 'txtdomain'),
    ]
]);
register_taxonomy_for_object_type('Types', 'properties');

//Category Types
register_taxonomy('Purposes', ['properties'], [
    'label' => __('Purposes', 'txtdomain'),
    'hierarchical' => true,
    'rewrite' => ['slug' => 'purposes'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
        'singular_name' => __('Purposes', 'txtdomain'),
        'all_items' => __('All Purposes', 'txtdomain'),
        'edit_item' => __('Edit Purposes', 'txtdomain'),
        'view_item' => __('View Purposes', 'txtdomain'),
        'update_item' => __('Update Purposes', 'txtdomain'),
        'add_new_item' => __('Add New Purposes', 'txtdomain'),
        'new_item_name' => __('New Purposes Name', 'txtdomain'),
        'search_items' => __('Search Purposes', 'txtdomain'),
        'parent_item' => __('Parent Purposes', 'txtdomain'),
        'parent_item_colon' => __('Parent Purposes:', 'txtdomain'),
        'not_found' => __('No Purposes found', 'txtdomain'),
    ]
]);
register_taxonomy_for_object_type('Purposes', 'properties');


}

}
add_action('init', 'agents_custom_post_type');
add_action('init', 'properties_custom_post_type');

    

