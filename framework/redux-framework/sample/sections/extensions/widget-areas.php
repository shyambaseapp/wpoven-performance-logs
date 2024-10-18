<?php
/**
 * Redux Widget Areas Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

// --> Below this line not needed. This is just for demonstration purposes.
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Widget Areas', 'wpoven-performance-logs' ),
		// phpcs:ignore
		// 'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/extensions/widget-areas.html" target="_blank">https://devs.redux.io/extensions/widget-areas.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'widget_areas',
				'type'     => 'info',
				'style'    => 'info',
				'notice'   => true,
				'title'    => esc_html__( 'Widget Areas is Already Running!', 'wpoven-performance-logs' ),

				// translators: %1$s: Widget Admin URL.
				'subtitle' => sprintf( esc_html__( 'To see it in action, head over to your %1$s', 'wpoven-performance-logs' ), '<a href="' . admin_url( 'widgets.php' ) . '">' . esc_html__( 'Widgets page', 'wpoven-performance-logs' ) . '</a> (Applicable for Classic Widgets only).' ),
			),
		),
	)
);
