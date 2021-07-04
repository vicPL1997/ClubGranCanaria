<?php
/**
 * Inspiro Lite: Adds settings, sections, controls to Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * PHP Class for Registering Customizer Confugration
 *
 * @since 1.3.0
 */
class Inspiro_Typo_Main_Menu_Config {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'inspiro/customize_register', array( $this, 'register_configuration' ) );
	}

	/**
	 * Register configurations
	 *
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @return void
	 */
	public function register_configuration( $wp_customize ) {
		$wp_customize->add_section(
			'inspiro_typography_section_menu',
			array(
				'title' => __( 'Menu', 'inspiro' ),
				'panel' => 'inspiro_typography_panel',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Title_Control(
				$wp_customize,
				'inspiro_typography_section_title_main_menu',
				array(
					'label'    => __( 'Main Menu', 'inspiro' ),
					'section'  => 'inspiro_typography_section_menu',
					'settings' => array(),
				)
			)
		);

		$wp_customize->add_setting(
			'mainmenu-font-family',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => "'Montserrat', sans-serif",
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				'mainmenu-font-family',
				array(
					'label'   => __( 'Font Family', 'inspiro' ),
					'section' => 'inspiro_typography_section_menu',
					'connect' => 'mainmenu-font-weight',
					'variant' => 'mainmenu-font-variant',
				)
			)
		);

		$wp_customize->add_setting(
			'mainmenu-font-variant',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_variant',
				'default'           => '500',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Font_Variant_Control(
				$wp_customize,
				'mainmenu-font-variant',
				array(
					'label'       => __( 'Variants', 'inspiro' ),
					'description' => __( 'Only selected Font Variants will be loaded from Google Fonts.', 'inspiro' ),
					'section'     => 'inspiro_typography_section_menu',
					'connect'     => 'mainmenu-font-family',
				)
			)
		);

		$wp_customize->add_setting(
			'mainmenu-font-size',
			array(
				'default'           => 16,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_integer',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'mainmenu-font-size',
				array(
					'label'       => __( 'Font Size (px)', 'inspiro' ),
					'section'     => 'inspiro_typography_section_menu',
					'input_attrs' => array(
						'min'  => 12,
						'max'  => 20,
						'step' => 1,
					),
				)
			)
		);

		$wp_customize->add_setting(
			'mainmenu-font-weight',
			array(
				'default'           => '500',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_weight',
			)
		);

		$wp_customize->add_control(
			'mainmenu-font-weight',
			array(
				'label'   => __( 'Font Weight', 'inspiro' ),
				'section' => 'inspiro_typography_section_menu',
				'type'    => 'select',
				'choices' => Inspiro_Font_Family_Manager::get_font_family_weight( 'mainmenu-font-family', $wp_customize ),
			)
		);

		$wp_customize->add_setting(
			'mainmenu-text-transform',
			array(
				'default'           => '',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_choices',
			)
		);

		$wp_customize->add_control(
			'mainmenu-text-transform',
			array(
				'label'   => __( 'Text Transform', 'inspiro' ),
				'section' => 'inspiro_typography_section_menu',
				'type'    => 'select',
				'choices' => array(
					''           => _x( 'Inherit', 'text transform', 'inspiro' ),
					'none'       => _x( 'None', 'text transform', 'inspiro' ),
					'capitalize' => __( 'Capitalize', 'inspiro' ),
					'uppercase'  => __( 'Uppercase', 'inspiro' ),
					'lowercase'  => __( 'Lowercase', 'inspiro' ),
				),
			)
		);

		$wp_customize->add_setting(
			'mainmenu-line-height',
			array(
				'default'           => 1.8,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_float',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'mainmenu-line-height',
				array(
					'label'       => __( 'Line Height', 'inspiro' ),
					'section'     => 'inspiro_typography_section_menu',
					'input_attrs' => array(
						'min'  => 1,
						'max'  => 2,
						'step' => 0.1,
					),
				)
			)
		);
	}
}

new Inspiro_Typo_Main_Menu_Config();
