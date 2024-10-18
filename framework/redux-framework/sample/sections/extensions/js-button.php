<?php
/**
 * Redux JS Button Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'JS Button', 'wpoven-performance-logs' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-extensions/js-button.html" target="_blank">https://devs.redux.io/core-extensions/js-button.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-js-button',
				'type'     => 'js_button',
				'title'    => esc_html__( 'JS Button', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Run javascript in the options panel from button clicks.', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'Click the Add Date button to add the current date into the text field below.', 'wpoven-performance-logs' ),
				'script'   => array(
					'url'       => plugins_url( '/extensions/js-button.js', __DIR__ ),
					'dir'       => __DIR__ . '/js-button.js',
					'dep'       => array( 'jquery' ),
					'ver'       => time(),
					'in_footer' => true,
				),
				'buttons'  => array(
					array(
						'text'     => esc_html__( 'Add Date', 'wpoven-performance-logs' ),
						'class'    => 'button-primary',
						'function' => 'redux_add_date',
					),
					array(
						'text'     => esc_html__( 'Alert', 'wpoven-performance-logs' ),
						'class'    => 'button-secondary',
						'function' => 'redux_show_alert',
					),

				),
			),
			array(
				'id'       => 'opt-blank-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Date', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Click the Add Date button above to fill out this field.', 'wpoven-performance-logs' ),
			),
		),
	)
);
