<?php

global $ss_framework;

echo '<article '; post_class(); echo '>';

	echo '<div class="entry-summary">';

		if ( has_post_thumbnail() ) :
			echo '<a href="';
			echo the_permalink();
			echo '" title="';
			echo the_title_attribute();
			echo '">';
			echo the_post_thumbnail('thumbnail', array('class' => 'alignleft'));
			echo '</a>';
		endif;

		do_action( 'shoestrap_in_article_top' );
		shoestrap_title_section( true, 'h2', true );

		echo apply_filters( 'shoestrap_do_the_excerpt', get_the_excerpt() );
		echo $ss_framework->clearfix();
	echo '</div>';

	if ( has_action( 'shoestrap_entry_footer' ) ) {
		echo '<footer class="entry-footer">';
		do_action( 'shoestrap_entry_footer' );
		echo '</footer>';
	}

	do_action( 'shoestrap_in_article_bottom' );

echo '</article>';
