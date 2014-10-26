<?php

// Adds Custom Post Type
// Add 'post' back in for the default post type.
// It would look like this: 
// $query->set( 'post_type', array( 'post', 'projects' ) );
add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'projects' ) );

    return $query;
}

function testimonials_get_posts( $query ) {

    if ( is_page(67) )
        $query->set( 'post_type', array( 'testimonials' ) );

    return $query;
}

// Adds image size for use on post detail page
add_image_size( 'full-width', 750, 360, true ); // 750 pixels wide x 360 high, cropped