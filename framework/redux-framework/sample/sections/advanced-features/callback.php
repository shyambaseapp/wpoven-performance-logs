<?php
/**
 * Redux Framework callback config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Callback', 'wpoven-performance-logs' ),
		'id'         => 'additional-callback',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/configuration/fields/data.html#using-a-custom-callback" target="_blank">https://devs.redux.io/configuration/fields/data.html#using-a-custom-callback</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-custom-callback',
				'type'     => 'callback',
				'title'    => esc_html__( 'Custom Field Callback', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'This is a completely unique field type', 'wpoven-performance-logs' ),
				'desc'     => esc_html__( 'This is created with a callback function, so anything goes in this field. Make sure to define the function though.', 'wpoven-performance-logs' ),
				'callback' => 'redux_my_custom_field',
			),
		),
	)
);

if ( ! function_exists( 'redux_my_custom_field' ) ) {
	/**
	 * Custom function for the callback referenced above.
	 *
	 * @param array $field Field array.
	 * @param mixed $value Set value.
	 */
	function redux_my_custom_field( array $field, $value ) {
		print_r( $field ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions
		echo '<br/>';
		print_r( $value ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions
	}
}
