<?php
/**
 * Redux Framework field sanitizing config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Field Sanitizing', 'wpoven-performance-logs' ),
		'id'         => 'sanitizing',
		// phpcs:ignore
		// 'desc'       => esc_html__( 'For full documentation on sanitizing, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/configuration/fields/sanitizing/" target="_blank">https://devs.redux.io/configuration/fields/sanitizing/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-text-uppercase',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Force Uppercase', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Uses the strtoupper function to force all uppercase characters.', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'sanitize' => array( 'strtoupper' ),
				'default'  => 'Force Uppercase',
			),
			array(
				'id'       => 'opt-text-sanitize-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Sanitize Title', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Uses the WordPress sanitize_title function to format text.', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'sanitize' => array( 'sanitize_title' ),
				'default'  => 'Sanitize This Title',
			),
			array(
				'id'       => 'opt-text-custom-sanitize',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Custom Sanitize', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Uses the custom function redux_custom_sanitize to capitalize every other letter.', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
				'sanitize' => array( 'redux_custom_sanitize' ),
				'default'  => 'Sanitize This Text',
			),
		),
	)
);
