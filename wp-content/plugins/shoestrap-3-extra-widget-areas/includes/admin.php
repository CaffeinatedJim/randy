<?php


function shoestrap_ewa_ctions_list() {
	$actions = array(
		'shoestrap_pre_top_bar',
		'shoestrap_do_navbar',
		'shoestrap_pre_main',
		'shoestrap_index_begin',
		'shoestrap_index_end',
		'shoestrap_single_pre_content',
		'shoestrap_single_after_content',
		'shoestrap_after_comments',
		'shoestrap_after_content',
		'shoestrap_pre_footer',
	);

	return $actions;
}
/*
 * Shoestrap 3 Extra Widget areas options
 */
if ( !function_exists( 'shoestrap_ewa_module_options' ) ) :
function shoestrap_ewa_module_options( $sections ) {

	$section = array(
		'title' => __( 'Extra Widgets', 'shoestrap' ),
		'icon'  => 'el-icon-chevron-right  '
	);

	$fields[] = array(
		'id'    => 'shoestrap_ewa_details_info',
		'type'  => 'info',
		'style' => 'success',
		'title' => '',
		'icon'  => 'el-icon-info-sign',
		'desc'  => __( 'You can add extra widget areas or custom HTML code to various areas of your website.
			<br />
			The custom HTML field accepts <code>shortcodes</code> and can be used to add text, slideshows or any custom content you can think of.
			<br />
			If you want to use widgets, you can select the pages that will have the widget areas you want by using the <a href="http://www.woothemes.com/woosidebars/">WooSidebars</a> plugin.
			<br />
			When you enable a field, the corresponding options will be shown right below it so that you can change them.', 'shoestrap_ewa'),
	);

	$action = 'shoestrap_pre_top_bar';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'Before Top NavBar (global)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_do_navbar';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'Before After NavBar (global)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_pre_main';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'Before Main Content (global)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_index_begin';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'Before Index (archives)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_index_end';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'After Index (archives)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_single_pre_content';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'Before Content (single)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_single_after_content';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'After Content (single)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_after_comments';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'After Comments (single)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_after_content';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'After Content (global)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$action = 'shoestrap_pre_footer';
	$fields[] = array(
		'id'       => $action . '_check',
		'type'     => 'button_set',
		'options'  => array(
			'0'    => __( 'Off', 'shoestrap_ewa' ),
			'1'    => __( 'Widgets Row', 'shoestrap_ewa' ),
			'2'    => __( 'Custom HTML', 'shoestrap_ewa' ),
		),
		'title'    => __( 'Before Footer (global)', 'shoestrap_ewa'),
		'subtitle' => '',
		'desc'     => '',
		'default'  => '0'// 1 = on | 0 = off
	);

		$fields[] = array(
			'id'       => $action . '_nr',
			'type'     => 'button_set',
			'title'    => __( 'Number of widget areas to insert', 'shoestrap_ewa' ),
			'subtitle' => __( 'Widget areas will all have the same width', 'shoestrap_ewa' ),
			'desc'     => '',
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( $action . '_check', '=', array( '1' ) ),
		);

		$fields[] = array(
			'id'       => $action . '_custom_content',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom Content', 'shoestrap_ewa' ),
			'subtitle' => __( 'You can enter your HTML code here (also accepts shortcodes).', 'shoestrap_ewa' ) . ' ' . __( 'The content will be inserted to your pages using the', 'shoestrap_ewa' ) . ' <code>' . $action . '</code> ' . __( 'hook.', 'shoestrap_ewa' ) . ' ' . __( 'You can learn more about this hook', 'shoestrap_ewa' ) . '<a href="http://docs.wpmu.io/shoestrap/actions-hooks/' . $action . '/"> ' . __( 'here.', 'shoestrap_ewa' ),
			'mode'     => 'html',
			'theme'    => 'monokai',
			'default'  => '',
			'required' => array( $action . '_check', '=', array( '2' ) ),
		);

	$section['fields'] = $fields;

	$section = apply_filters( 'shoestrap_ewa_module_options_modifier', $section );
	
	$sections[] = $section;
	return $sections;
}
add_filter( 'redux/options/' . REDUX_OPT_NAME . '/sections', 'shoestrap_ewa_module_options' );
endif;
