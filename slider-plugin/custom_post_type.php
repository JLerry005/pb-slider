<?php
/**
 * Create your custom post type and taxonomy here.
 * add a wordpress function to create your custom post type, you can use any name.
 */

// CUSTOM POST TYPE

function slider_custom_post_type() {

    $labels = array (
        'name'               => 'Slider',
        'singular_name'      => 'Slider',
        'add_new'            => 'Add Item',
        'all_items'          => 'All Items',
        'edit_item'          => 'Edit Item',
        'new_item'           => 'New Item',
        'view_item'          => 'View Item',
        'search_item'        => 'Search Post',
        'not_found'          => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon'  => 'Parent Item'
    );

    $args = array (
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'supports'            => array (
                                    'title',
                                    'editor',
                                    'thumbnail',
                                    'revisions',
                                    'comments'
                                ),
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-slides'
    );
    
    register_post_type('slider',$args);
}

add_action('init','slider_custom_post_type');

// TAXONOMY

function slider_custom_taxonomies() {

    // Category Taxonomy

    $labels = array (
        'name'               => 'Categories',
        'singular_name'      => 'Category',
        'search_items'       => 'Search Categories',
        'all_items'          => 'All Categories',
        'parent_item'        => 'Parent Category',
        'parent_item_colon'  => 'Parent Category:',
        'edit_item'          => 'Edit Category',
        'update_item'        => 'Update Category',
        'add_new_item'       => 'Add New Post Category',
        'new_item_name'      => 'New Category Name',
        'menu_name'          => 'Categories'
    );

    $args = array (
        'hierarchical'       => true,
        'labels'             => $labels,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'category' )
    );

    register_taxonomy( 'category' , array('slider'), $args);

    // Post Tag Taxonomy

    register_taxonomy('tag', 'slider', array (
        'label'         => 'Tags',
        'rewrite'       => array( 'slug' => 'tag' ),
        'hierarchical'  => false
    ) );

}

add_action('init','slider_custom_taxonomies');
