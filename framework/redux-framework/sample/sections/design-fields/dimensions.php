<?php
/**
 * Redux Framework dimensions config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Dimensions', 'wpoven-performance-logs' ),
		'id'         => 'design-dimensions',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/dimensions.html" target="_blank">https://devs.redux.io/core-fields/dimensions.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'opt-dimensions',
				'type'           => 'dimensions',
				'units'          => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %.
				'units_extended' => 'true', // Allow users to select any type of unit.
				'title'          => esc_html__( 'Dimensions (Width/Height) Option', 'wpoven-performance-logs' ),
				'subtitle'       => esc_html__( 'Allow your users to choose width, height, and/or unit.', 'wpoven-performance-logs' ),
				'desc'           => esc_html__( 'You can enable or disable any piece of this field. Width, Height, or Units.', 'wpoven-performance-logs' ),
				'default'        => array(
					'width'  => 200,
					'height' => 100,
				),
			),
			array(
				'id'             => 'opt-dimensions-width',
				'type'           => 'dimensions',
				'units'          => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %.
				'units_extended' => 'true', // Allow users to select any type of unit.
				'title'          => esc_html__( 'Dimensions (Width) Option', 'wpoven-performance-logs' ),
				'subtitle'       => esc_html__( 'Allow your users to choose width, height, and/or unit.', 'wpoven-performance-logs' ),
				'desc'           => esc_html__( 'You can enable or disable any piece of this field. Width, Height, or Units.', 'wpoven-performance-logs' ),
				'height'         => false,
				'default'        => array(
					'width'  => 200,
					'height' => 100,
				),
			),
		),
	)
);
