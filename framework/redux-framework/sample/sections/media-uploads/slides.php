<?php
/**
 * Redux Framework slides config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Slides', 'wpoven-performance-logs' ),
		'id'         => 'additional-slides',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/slides.html" target="_blank">https://devs.redux.io/core-fields/slides.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-slides',
				'type'        => 'slides',
				'title'       => esc_html__( 'Slides Options', 'wpoven-performance-logs' ),
				'subtitle'    => esc_html__( 'Unlimited slides with drag and drop sorting.', 'wpoven-performance-logs' ),
				'desc'        => esc_html__( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'wpoven-performance-logs' ),
				'placeholder' => array(
					'title'       => esc_html__( 'This is a title', 'wpoven-performance-logs' ),
					'description' => esc_html__( 'Description Here', 'wpoven-performance-logs' ),
					'url'         => esc_html__( 'Give us a link!', 'wpoven-performance-logs' ),
				),
			),
		),
	)
);
