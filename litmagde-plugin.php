<?php
/*
Plugin Name: LitMagDe
Description: Literary Magazine Design, a plugin for adding functionalty to Shenandoah literary magazine.
Version: 0.1
Author: Jeff Barry
Author URI: https://endlesshybrids.com
*/
/* Start Adding Functions Below this Line */
function wporg_register_taxonomy_TOC() {
    $labels = array(
        'name'              => _x( 'TOC', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'TOCorder', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_TOC' );  
  
/* Stop Adding Functions Below this Line */
?>