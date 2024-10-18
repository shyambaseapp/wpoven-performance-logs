<?php
/**
 * Redux Taxonomy Meta config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Taxonomy' ) ) {
	return;
}

// Change the priority the Redux_Taxonomy boxes appear.
Redux_Taxonomy::set_args(
	$opt_name,
	array(
		'taxonomy_priority' => 55,
	)
);

Redux_Taxonomy::set_term(
	$opt_name,
	array(
		'id'             => 'demo-taxonomy',
		'title'          => esc_html__( 'Cool Options', 'wpoven-performance-logs' ),

		// Slug for every taxonomy you want.
		'taxonomy_types' => array( 'category', 'post_tag' ),

		'add_visibility' => true,

		// Can be set on term, section, or field level. Denote what fields to be displayed on the added {TERM} pages.
		'sections'       => array(
			array(
				'title'  => esc_html__( 'Home Settings', 'wpoven-performance-logs' ),
				'icon'   => 'el-icon-home',
				'fields' => array(
					array(
						'id'             => 'tax-text',
						'type'           => 'text',
						'add_visibility' => true,
						'title'          => esc_html__( 'Input 1', 'wpoven-performance-logs' ),
					),
					array(
						'id'             => 'tax-button-set',
						'type'           => 'button_set',
						'title'          => esc_html__( 'Button Set Option', 'wpoven-performance-logs' ),
						'subtitle'       => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
						'desc'           => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
						'add_visibility' => true,
						'options'        => array(
							'1' => 'Opt 1',
							'2' => 'Opt 2',
							'3' => 'Opt 3',
						),
						'default'        => '2',
					),
					array(
						'id'             => 'tax-text-2',
						'type'           => 'text',
						'add_visibility' => true,
						'title'          => esc_html__( 'Input 2', 'wpoven-performance-logs' ),
					),
					array(
						'id'       => 'tax-web-fonts',
						'type'     => 'media',
						'title'    => esc_html__( 'Web Fonts', 'wpoven-performance-logs' ),
						'compiler' => 'true',
						'mode'     => false,
						// Can be set to false to allow any media type, or can also be set to any mime type.
						'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'wpoven-performance-logs' ),
					),
					array(
						'id'       => 'tax-section-media-start',
						'type'     => 'section',
						'title'    => esc_html__( 'Media Options', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'With the "section" field you can create indent option sections.', 'wpoven-performance-logs' ),
						'indent'   => true,
					),
					array(
						'id'       => 'tax-media-url',
						'type'     => 'media',
						'url'      => true,
						'title'    => esc_html__( 'Media w/ URL', 'wpoven-performance-logs' ),
						'compiler' => 'true',
						'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'wpoven-performance-logs' ),
						'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
					),
					array(
						'id'     => 'tax-section-media-end',
						'type'   => 'section',
						'indent' => false,
					),
					array(
						'id'       => 'tax-media-no-url',
						'type'     => 'media',
						'title'    => esc_html__( 'Media w/o URL', 'wpoven-performance-logs' ),
						'desc'     => esc_html__( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'wpoven-performance-logs' ),
					),
					array(
						'id'       => 'tax-media-no-preview',
						'type'     => 'media',
						'preview'  => false,
						'title'    => esc_html__( 'Media No Preview', 'wpoven-performance-logs' ),
						'desc'     => esc_html__( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'wpoven-performance-logs' ),
					),
					array(
						'id'       => 'tax-gallery',
						'type'     => 'gallery',
						'title'    => esc_html__( 'Add/Edit Gallery', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'wpoven-performance-logs' ),
						'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
					),
					array(
						'id'      => 'tax-slider',
						'type'    => 'slider',
						'title'   => esc_html__( 'JQuery UI Slider Example 1', 'wpoven-performance-logs' ),
						'desc'    => esc_html__( 'JQuery UI slider description. Min: 1, max: 500, step: 3, default value: 45', 'wpoven-performance-logs' ),
						'default' => '46',
						'min'     => '1',
						'step'    => '3',
						'max'     => '500',
					),
					array(
						'id'      => 'tax-slider-2',
						'type'    => 'slider',
						'title'   => esc_html__( 'JQuery UI Slider Example 2 w/ Steps (5)', 'wpoven-performance-logs' ),
						'desc'    => esc_html__( 'JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'wpoven-performance-logs' ),
						'default' => '0',
						'min'     => '0',
						'step'    => '5',
						'max'     => '300',
					),
					array(
						'id'      => 'tax-spinner',
						'type'    => 'spinner',
						'title'   => esc_html__( 'Spinner Example 1', 'wpoven-performance-logs' ),
						'desc'    => esc_html__( 'Spinner description. Min:20, max: 100, step:20, default value: 40', 'wpoven-performance-logs' ),
						'default' => '40',
						'min'     => '20',
						'step'    => '20',
						'max'     => '100',
					),
					array(
						'id'       => 'tax-switch-parent',
						'type'     => 'switch',
						'title'    => esc_html__( 'Switch - Nested Children, Enable to show', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Look, it\'s on! Also hidden child elements!', 'wpoven-performance-logs' ),
						'default'  => 0,
						'on'       => 'Enabled',
						'off'      => 'Disabled',
					),
					array(
						'id'       => 'tax-switch-child',
						'type'     => 'switch',
						'required' => array( 'tax-switch-parent', '=', '1' ),
						'title'    => esc_html__( 'Switch - This and the next switch required for patterns to show', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'Also called a "fold" parent.', 'wpoven-performance-logs' ),
						'desc'     => esc_html__( 'Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'wpoven-performance-logs' ),
						'default'  => false,
					),
				),
			),

			array(
				'title'  => esc_html__( 'Home Layout', 'wpoven-performance-logs' ),
				// translators: %s = Redux GitHub URL.
				'desc'   => sprintf( esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the GitHub repo at: %s', 'wpoven-performance-logs' ), '<a href="https://github.com/reduxframework/redux-framework">https://github.com/reduxframework/redux-framework</a>' ),
				'icon'   => 'el-icon-home',
				'fields' => array(
					array(
						'id'             => 'tax-homepage_blocks',
						'type'           => 'sorter',
						'title'          => 'Homepage Layout Manager',
						'desc'           => 'Organize how you want the layout to appear on the homepage',
						'compiler'       => 'true',
						'add_visibility' => true,

						'options'        => array(
							'enabled'  => array(
								'highlights' => 'Highlights',
								'slider'     => 'Slider',
								'staticpage' => 'Static Page',
							),
							'disabled' => array(
								'services' => 'Services',
							),
						),
					),

					array(
						'id'       => 'tax-presets',
						'type'     => 'image_select',
						'presets'  => true,
						'title'    => esc_html__( 'Preset', 'wpoven-performance-logs' ),
						'subtitle' => esc_html__( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'wpoven-performance-logs' ),
						'default'  => 0,
						'desc'     => esc_html__( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'wpoven-performance-logs' ),
						'options'  => array(
							'1' => array(
								'alt'     => 'Preset 1',
								'img'     => ReduxFramework::$_url . '../sample/presets/preset1.png',
								'presets' => array(
									'switch-on'     => 1,
									'switch-off'    => 1,
									'switch-custom' => 1,
								),
							),
							'2' => array(
								'alt'     => 'Preset 2',
								'img'     => ReduxFramework::$_url . '../sample/presets/preset2.png',
								'presets' => '{"slider1":"1", "slider2":"0", "switch-on":"0"}',
							),
						),
					),
				),
			),
		),
	)
);
