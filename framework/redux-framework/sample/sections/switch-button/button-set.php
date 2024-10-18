<?php
/**
 * Redux Framework button set config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Button Set', 'wpoven-performance-logs' ),
		'id'         => 'switch_buttonset-set',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/button-set.html" target="_blank">https://devs.redux.io/core-fields/button-set.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-button-set',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Button Set Option', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),

				// Must provide key => value pairs for radio options.
				'options'  => array(
					'1' => 'Opt 1',
					'2' => 'Opt 2',
					'3' => 'Opt 3',
				),
				'default'  => '2',
			),
			array(
				'id'       => 'opt-button-set-multi',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Button Set, Multi Select', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'multi'    => true,

				// Must provide key => value pairs for radio options.
				'options'  => array(
					'1' => 'Opt 1',
					'2' => 'Opt 2',
					'3' => 'Opt 3',
				),
				'default'  => array( '2', '3' ),
			),
		),
	)
);
