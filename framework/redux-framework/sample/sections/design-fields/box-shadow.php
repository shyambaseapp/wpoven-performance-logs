<?php
/**
 * Redux Box Shadow Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Box Shadow', 'wpoven-performance-logs' ),
		'id'         => 'design-box-shadow',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-fields/box-shadow.html" target="_blank">https://devs.redux.io/core-fields/box_shadow.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-box_shadow',
				'type'        => 'box_shadow',
				'output'      => array( '.site-header, header' ),
				'media_query' => array(
					'output'   => true,
					'compiler' => true,
					'queries'  => array(
						array(
							'rule'      => 'screen and (max-width: 360px)',
							'selectors' => array( '.box-shadow' ),
						),
						array(
							'rule'      => 'screen and (max-width: 1120px)',
							'selectors' => array( '.box-shadow-wide' ),
						),
					),
				),
				'title'       => esc_html__( 'Box Shadow', 'wpoven-performance-logs' ),
				'subtitle'    => esc_html__( 'Site Header Box Shadow with inset and drop shadows.', 'wpoven-performance-logs' ),
				'desc'        => esc_html__( 'This is the description field, again good for additional info.', 'wpoven-performance-logs' ),
			),
		),
	)
);
