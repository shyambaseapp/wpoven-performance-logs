<?php
/**
 * Redux Framework checkbox config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Checkbox', 'wpoven-performance-logs' ),
		'id'               => 'basic-checkbox',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/checkbox.html" target="_blank">https://devs.redux.io/core-fields/checkbox.html</a>',
		'fields'           => array(
			array(
				'id'       => 'opt-checkbox',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Checkbox Option', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'default'  => '1', // 1 = on | 0 = off.
			),
			array(
				'id'       => 'opt-multi-check',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Multi Checkbox Option', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),

				// Must provide key => value pairs for multi checkbox options.
				'options'  => array(
					'1' => 'Opt 1',
					'2' => 'Opt 2',
					'3' => 'Opt 3',
				),
				'default'  => array(
					'1' => '1',
					'2' => '0',
					'3' => '0',
				),
			),
			array(
				'id'       => 'opt-checkbox-data',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Multi Checkbox Option (with menu data)', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'data'     => 'menu',
			),
			array(
				'id'       => 'opt-checkbox-sidebar',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Multi Checkbox Option (with sidebar data)', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'data'     => 'sidebars',
			),
		),
	)
);
