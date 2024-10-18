<?php
/**
 * Accordion config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Accordion', 'wpoven-performance-logs' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-extensions/accordion.html" target="_blank">https://devs.redux.io/core-extensions/accordion.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'accordion-section-1',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Accordion Section One', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Section one with subtitle', 'wpoven-performance-logs' ),
				'position' => 'start',
			),
			array(
				'id'       => 'opt-blank-text-1',
				'type'     => 'text',
				'title'    => esc_html__( 'Text box for some noble purpose.', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Frailty, thy name is woman!', 'wpoven-performance-logs' ),
			),
			array(
				'id'       => 'opt-switch-1',
				'type'     => 'switch',
				'title'    => esc_html__( 'Switch, for some other important task!', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'Physician, heal thyself!', 'wpoven-performance-logs' ),
			),
			array(
				'id'       => 'accordion-section-end-1',
				'type'     => 'accordion',
				'position' => 'end',
			),
			array(
				'id'       => 'accordion-section-2',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Accordion Section Two (no subtitle)', 'wpoven-performance-logs' ),
				'position' => 'start',
				'open'     => true,
			),
			array(
				'id'       => 'opt-blank-text-3',
				'type'     => 'text',
				'title'    => esc_html__( 'Look, another sample text box.', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'The tartness of his face sours ripe grapes.', 'wpoven-performance-logs' ),
			),
			array(
				'id'       => 'opt-switch-2',
				'type'     => 'switch',
				'title'    => esc_html__( 'Yes, another switch, but you\'re free to use any field you like.', 'wpoven-performance-logs' ),
				'subtitle' => esc_html__( 'I scorn you, scurvy companion!', 'wpoven-performance-logs' ),
			),
			array(
				'id'       => 'accordion-section-end-2',
				'type'     => 'accordion',
				'position' => 'end',
			),
		),
	)
);
