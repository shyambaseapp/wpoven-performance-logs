<?php
/**
 * Redux Repeater Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => __( 'Repeater', 'wpoven-performance-logs' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'wpoven-performance-logs' ) . '<a href="https://devs.redux.io/core-extensions/repeater.html" target="_blank">https://devs.redux.io/core-extensions/repeater.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'repeater-field-id',
				'type'        => 'repeater',
				'title'       => esc_html__( 'Repeater Demo', 'wpoven-performance-logs' ),
				'full_width'  => true,
				'subtitle'    => esc_html__( 'Repeater', 'wpoven-performance-logs' ),
				'item_name'   => '',
				'sortable'    => true,
				'active'      => false,
				'collapsible' => false,
				'fields'      => array(
					array(
						'id'          => 'title_field',
						'type'        => 'text',
						'placeholder' => esc_html__( 'Title', 'wpoven-performance-logs' ),
					),
					array(
						'id'          => 'textarea_field',
						'type'        => 'textarea',
						'placeholder' => esc_html__( 'Text Field', 'wpoven-performance-logs' ),
						'default'     => 'Text Field here',
						'title'       => esc_html__( 'Title', 'wpoven-performance-logs' ),
					),
					array(
						'id'          => 'select_field',
						'type'        => 'select',
						'multi'       => true,
						'title'       => esc_html__( 'Select Field', 'wpoven-performance-logs' ),
						'options'     => array(
							'1' => esc_html__( 'Option 1', 'wpoven-performance-logs' ),
							'2' => esc_html__( 'Option 2', 'wpoven-performance-logs' ),
							'3' => esc_html__( 'Option 3', 'wpoven-performance-logs' ),
						),
						'placeholder' => esc_html__( 'Listing Field', 'wpoven-performance-logs' ),
					),
					array(
						'id'          => 'switch_field',
						'type'        => 'switch',
						'placeholder' => esc_html__( 'Switch Field', 'wpoven-performance-logs' ),
						'default'     => true,
					),
					array(
						'id'          => 'text_field',
						'title'       => esc_html__( 'Text Field', 'wpoven-performance-logs' ),
						'type'        => 'text',
						'placeholder' => esc_html__( 'Text Field', 'wpoven-performance-logs' ),
						'required'    => array( 'switch_field', '=', false ),
						'default'     => 'Text Field here',
					),
				),
			),
		),
	)
);
