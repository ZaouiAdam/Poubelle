<?php
/**
 * GOAT Theme Customizer -Icons
 *
 * @package GOAT
 */

/**
 * Note: These functions and classes are prefixed with the parent theme name to overwrite the parent theme functionality.
 */

/**
 * Add SVG definitions to the footer.
 */
function embla_include_svg_icons() {
	// Define SVG sprite file.
	$svg_icons = get_stylesheet_directory() . '/images/svg-icons.svg' ;

	// If it exists, include it.
	if ( file_exists( $svg_icons ) ) {
		require_once( $svg_icons );
	}
}
add_action( 'wp_footer', 'embla_include_svg_icons', 9999 );

$goat_icon_list = array( 'activity', 'american-football', 'baseball-ball', 'basketball-ball', 'category', 'chat', 'close', 'comment', 'document', 'edit', 'editor-video', 'ellipsis', 'futbol', 'futbol-alt', 'heart', 'help', 'hockey-puck', 'info', 'image', 'location', 'mail', 'microphone', 'standard', 'star-empty', 'up', 'volleyball-ball', 'wordpress' );

/**
 * Register our customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function embla_customize_register_icon( $wp_customize ) {

	/**
	 * Custom control for our icons.
	 */
	class Embla_Icon_Control extends WP_Customize_Control {
		/**
		 * Create a fieldset, labels and radio buttons for our dashicons.
		 */
		public function render_content() {
			require get_stylesheet_directory() . '/images/svg-icons.svg';

			global $goat_icon_list;

			?>
			<div class="embla-radio-buttons">
				<fieldset>
				<legend class="customize-control-title"><?php echo esc_html( $this->label ); ?></legend>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php
				foreach ( $goat_icon_list as &$value ) {
				?>
					<label>
					<?php echo '<span class="screen-reader-text">' . esc_html_x( 'Icon name: ', 'There is a space after the colon', 'goat' ) . esc_html( $value ) . '</span>'; ?>
					<?php echo embla_get_svg( array( 'icon' => $value ) ); ?>
					<input type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?> />
					</label>
				<?php
				}
				?>
				</fieldset>
			</div>
			<?php
		}
	}

	$wp_customize->add_setting( 'embla_header_icon', array(
		'sanitize_callback' => 'embla_validate_icons',
		'default' => 'futbol',
	) );

	$wp_customize->add_control( new Embla_Icon_Control( $wp_customize, 'embla_header_icon', array(
		'label' => __( 'Custom Footer Icon', 'goat' ),
		'section'  => 'embla_options',
		'settings' => 'embla_header_icon',
		'priority' => 100,
	) ) );

	$wp_customize->add_setting( 'embla_icon_color', array(
		'default'        => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'embla_icon_color', array(
		'label'    => __( 'Icon color', 'goat' ),
		'section'  => 'embla_options',
		'settings' => 'embla_icon_color',
		'priority' => 100,
	) ) );

	$wp_customize->add_setting( 'embla_show_footer_icon', array(
		'sanitize_callback' => 'embla_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'embla_show_footer_icon', array(
		'type' => 'checkbox',
		'label' => __( 'Hide the icon in the footer.', 'goat' ),
		'section' => 'embla_options',
		'priority' => 110,
	) );

}
add_action( 'customize_register', 'embla_customize_register_icon' );

function embla_validate_icons( $input ) {
	global $goat_icon_list;
	$input = sanitize_key( $input );
	return ( in_array( $input,  $goat_icon_list, true ) ? $input : 'futbol' );
}
