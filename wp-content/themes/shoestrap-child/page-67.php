<?php
 
echo apply_filters( 'shoestrap_title_section', '<header><title>' . shoestrap_title() . '</title><h1 class="entry-title">' . shoestrap_title() . '</h1></header>' );
 
do_action( 'shoestrap_index_begin' );
 
if ( ! have_posts() ) {
echo '<div class="alert alert-warning">' . __( 'Sorry, no results were found.', 'shoestrap' ) . '</div>';
get_search_form();
}
 
global $ss_framework;

$loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => 5 ) );

while ( $loop->have_posts() ) : $loop->the_post();

$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'large', true);
 
echo '<article '; post_class(); echo '>';

    echo '<div class="entry-summary">';

        if ( has_post_thumbnail() ) :
            echo '<a href="';
            echo $image_url[0];
            echo '" rel="lightbox[testimonials]">';
            echo the_post_thumbnail('thumbnail', array('class' => 'alignleft'));
            echo '</a>';
        endif;

        do_action( 'shoestrap_in_article_top' );
        shoestrap_title_section( true, 'h2', false );

        the_content();
        echo $ss_framework->clearfix();
    echo '</div>';

    if ( has_action( 'shoestrap_entry_footer' ) ) {
        echo '<footer class="entry-footer">';
        do_action( 'shoestrap_entry_footer' );
        echo '</footer>';
    }

    do_action( 'shoestrap_in_article_bottom' );

echo '</article>';

endwhile;
 
 
do_action( 'shoestrap_index_end' );
 
echo shoestrap_pagination_toggler();