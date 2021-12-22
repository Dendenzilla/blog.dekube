<?php
// register a menu 
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

//add featured image
add_theme_support( 'post-thumbnails' );

// Remove pages from search results
function exclude_pages_from_search( $query ) {
  if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'post_type', 'post' );
  }
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );

/**
 * Halt the main query in the case of an empty search 
 */
add_filter( 'posts_search', function( $search, \WP_Query $q )
{
    if( ! is_admin() && empty( $search ) && $q->is_search() && $q->is_main_query() )
        $search .=" AND 0=1 ";

    return $search;
}, 10, 2 );