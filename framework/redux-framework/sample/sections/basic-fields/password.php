<?php
/**
 * Redux Framework password config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Password', 'wpoven-performance-logs' ),
		'id'         => 'basic-password',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/password.html" target="_blank">https://devs.redux.io/core-fields/password.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'password',
				'type'     => 'password',
				'username' => true,
				'title'    => 'Password Field',
			),
		),
	)
);
