<?php
/**
 * Redux Framework disable section config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Disable Section', 'wpoven-performance-logs' ),
		'id'               => 'basic-checkbox-section-disable',
		'subsection'       => true,
		'customizer_width' => '450px',
		'disabled'         => true,
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/checkbox.html" target="_blank">https://devs.redux.io/core-fields/checkbox.html</a>',
		'fields'           => array(
			array(
				'id'       => 'opt-checkbox-section-disable',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Checkbox Option', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'default'  => '1', // 1 = on | 0 = off.
			),
		),
	)
);
