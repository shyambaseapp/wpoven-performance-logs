<?php
/**
 * Redux Framework multi text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Multi Text', 'wpoven-performance-logs' ),
		'id'         => 'basic-multi-text',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/multi-text.html" target="_blank">https://devs.redux.io/core-fields/multi-text.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-multitext',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Multi Text Option', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Field subtitle', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'Field Description', 'wpoven-performance-logs' ),
			),
		),
	)
);
