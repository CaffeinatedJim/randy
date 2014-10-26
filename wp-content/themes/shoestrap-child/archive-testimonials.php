<?php
 
echo apply_filters( 'shoestrap_title_section', '<header><title>' . shoestrap_title() . '</title><h1 class="entry-title">' . shoestrap_title() . '</h1></header>' );
 
do_action( 'shoestrap_index_begin' );
 
if ( ! have_posts() ) {
echo '<div class="alert alert-warning">' . __( 'Sorry, no results were found.', 'shoestrap' ) . '</div>';
get_search_form();
}
 
global $ss_framework;
 
while ( have_posts() ) : the_post();
 
echo '<article class="' . implode( ' ', get_post_class() ) . '">';
do_action( 'shoestrap_single_top' );
shoestrap_title_section();
do_action( 'shoestrap_entry_meta' );
 
echo '<div class="entry-content">';
do_action( 'shoestrap_single_pre_content' );
the_excerpt();
echo $ss_framework->clearfix();
echo '<hr/>';
do_action( 'shoestrap_single_after_content' );
echo '</div>';
 
 
do_action( 'shoestrap_in_article_bottom' );
echo '</article>';
endwhile;
 
 
do_action( 'shoestrap_index_end' );
 
echo shoestrap_pagination_toggler();