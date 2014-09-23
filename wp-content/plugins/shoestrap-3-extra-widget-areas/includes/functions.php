<?php


function shoestrap_ewa_create_widget_areas() {
	global $ss_framework;
	$widgets_mode = shoestrap_getVariable( 'widgets_mode' );
	
	if ( $widgets_mode == 0 ) {
		$class        = 'panel panel-default';
		$before_title = $ss_framework->open_panel_heading( null );
		$after_title  = '</div>'.$ss_framework->open_panel_body( null );

	} elseif ( $widgets_mode == 1 ) {
		$class        = 'well';
		$before_title = '<h3 class="widget-title">';
		$after_title  = '</h3>';

	} else {
		$class        = '';
		$before_title = '<h3 class="widget-title">';
		$after_title  = '</h3>';

	}

	$action = 'shoestrap_pre_top_bar';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'Before Top NavBar (global)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_do_navbar';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'After NavBar (global)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_pre_main';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'Before Main Content (global)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_index_begin';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'Before Index (archives)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_index_end';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'After Index (archives)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_single_pre_content';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'Before Content (single)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_single_after_content';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'After Content (single)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_after_comments';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'After Comments (single)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_after_content';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'After Content (global)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

	$action = 'shoestrap_pre_footer';
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		$i = 1;
		$times_to_run = shoestrap_getVariable( $action . '_nr' );
		for ( $i = 1; $i < ( $times_to_run + 1 ); $i++) {
			// Register the sidebar
			register_sidebar( array(
				'name'          => __( 'Before Footer (global)' . ' ' . $i, 'shoestrap' ),
				'id'            => $action . '_' . $i,
				'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => $before_title,
				'after_title'   => $after_title,
			));
		}
	}

}
add_action( 'init', 'shoestrap_ewa_create_widget_areas', 11 );


function shoestrap_ewa_build_region() {

	$actions = shoestrap_ewa_ctions_list();

	foreach ( $actions as $action ) {
		if ( shoestrap_getVariable( $action . '_check' ) != '0' )
			add_action( $action, 'shoestrap_ewa_' . $action, 99 );
	}
}
add_action( 'init', 'shoestrap_ewa_build_region' );


function shoestrap_ewa_widget_area_wrapper( $action = '', $num = 3 ) {
	global $ss_framework;
	if ( shoestrap_getVariable( $action . '_check' ) == '1' ) {
		echo $ss_framework->open_row( 'div', null, $action, null );
			for ( $i = 1; $i < ( $num + 1 ); $i++ ) {
				echo '<div class="'. $ss_framework->column_classes( array( 'medium' => 12 / $num ), null ) .'">';
					dynamic_sidebar( $action . '_' . $i );
				echo '</div>';
			}
		echo $ss_framework->close_row( 'div' );
	} elseif ( shoestrap_getVariable( $action . '_check' ) == '2' ) {
		echo apply_filters( 'the_content', shoestrap_getVariable( $action . '_custom_content' ) );
	}
}


function shoestrap_ewa_shoestrap_pre_top_bar() {
	$action = 'shoestrap_pre_top_bar';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_do_navbar() {
	$action = 'shoestrap_do_navbar';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_pre_main() {
	$action = 'shoestrap_pre_main';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_index_begin() {
	$action = 'shoestrap_index_begin';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_index_end() {
	$action = 'shoestrap_index_end';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_single_pre_content() {
	$action = 'shoestrap_single_pre_content';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_single_after_content() {
	$action = 'shoestrap_single_after_content';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_after_comments() {
	$action = 'shoestrap_after_comments';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_after_content() {
	$action = 'shoestrap_after_content';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}


function shoestrap_ewa_shoestrap_pre_footer() {
	$action = 'shoestrap_pre_footer';
	$num    = intval( shoestrap_getVariable( $action . '_nr' ) );
	shoestrap_ewa_widget_area_wrapper( $action, $num );
}