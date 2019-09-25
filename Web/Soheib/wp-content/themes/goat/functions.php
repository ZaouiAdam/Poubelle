<?php
/**
 * GOAT functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GOAT
 */

function goat_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'goat_custom_header_args',
			array(
				'default-image'      => get_stylesheet_directory_uri() . '/images/ball.jpg',
				'default-text-color' => '#111',
				'uploads'            => true,
				'width'              => '2000',
				'flex-height'        => true,
				'flex-width'         => true,
				'video'              => true,
			)
		)
	);

	register_default_headers(
		array(
			'default-image' => array(
				'url'           => get_stylesheet_directory_uri() . '/images/ball.jpg',
				'thumbnail_url' => get_stylesheet_directory_uri() . '/images/ball.jpg',
				'description'   => __( 'Football', 'goat' ),
			),
		)
	);

	add_theme_support( 'sportspress' );
}
add_action( 'after_setup_theme', 'goat_setup' );

function goat_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Front page Widgets', 'goat' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Widgets in this section will be shown on your front page, below the header.', 'goat' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'goat_widgets_init' );
/**
 * Register custom fonts.
 * Credits:
 * Twenty Seventeen WordPress Theme, Copyright 2016 WordPress.org
 * Twenty Seventeen is distributed under the terms of the GNU GPL
 */
function goat_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported, translate this to 'off'. Do not translate
	 * into your own language.
	 */

	$dancing = _x( 'on', 'Graduate font: on or off', 'goat' );

	if ( 'off' !== $dancing ) {
		$font_families = array();
		$font_families[] = 'Graduate';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function goat_scripts() {
	wp_enqueue_style( 'goat-fonts', goat_fonts_url(), array(), null );
	wp_enqueue_style( 'goat-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'open-sans' );
}
add_action( 'wp_enqueue_scripts', 'goat_scripts' );

require get_stylesheet_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'goat_register_required_plugins' );

/**
 * Register the recommended plugins for this theme.
 */
function goat_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'SportsPress',
			'slug'      => 'sportspress',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'goat',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => false,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		'strings'      => array(
			'page_title' => __( 'Install Recommended Plugins', 'goat' ),
			'menu_title' => __( 'Install Plugins', 'goat' ),
		),
	);

	tgmpa( $plugins, $config );
}

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer-icons.php';

function goat_customize_register( $wp_customize ) {
	// Remove parent theme customizer option.
	$wp_customize->remove_control( 'embla_show_header_icon' );
	$wp_customize->remove_section( 'embla_font_options' );
	// Include link to the child themes support page.
	$wp_customize->get_section( 'embla_support' )->pro_url = 'https://wordpress.org/support/theme/goat/reviews/#new-post';
	$wp_customize->get_section( 'embla_support' )->pro_url2 = 'https://wordpress.org/support/theme/goat';
}
add_action( 'customize_register', 'goat_customize_register', 1000 );

/**
 * Custom CSS for the accent color.
 */
function goat_customize_css() {
	if ( get_theme_mod( 'embla_accent_color' ) ) {
		echo '<style type="text/css">';
		echo '.entry-title a:hover{	box-shadow: inset 0 0 0 0 ' . esc_attr( get_theme_mod( 'embla_accent_color' ) ) . ', 0 2px 0 0 ' . esc_attr( get_theme_mod( 'embla_accent_color' ) ) . '; }';
		echo ' .site-footer, .menu-wrap{border-top:6px solid ' . esc_attr( get_theme_mod( 'embla_accent_color' ) ) . '; }';
		echo ' .site-footer {border-bottom:2px solid ' . esc_attr( get_theme_mod( 'embla_accent_color' ) ) . '; }';
		echo ' .top-widget-area .widget{background: ' . esc_attr( get_theme_mod( 'embla_accent_color' ) ) . '; }';
		echo '</style>';
	}

	if ( get_theme_mod( 'embla_hide_priority_menu' ) ) {
		echo '<style type="text/css">';
		echo '#mobile-menu-toggle{margin-bottom:13px;}';
		echo '</style>';
	}
}
add_action( 'wp_head', 'goat_customize_css' );
