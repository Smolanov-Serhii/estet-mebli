<?php
/**
 * Template Mela Theme Customizer support
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since Template Mela 1.0
 */
/**
 * Implement Theme Customizer additions and adjustments.
 *
 * @since TemplateMela 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tmpmela_customize_register( $wp_customize ) {
	// Add custom description to Colors and Background sections.
	$wp_customize->get_section( 'colors' )->description           = esc_html__( 'Background may only be visible on wide screens.', 'shopinia' );
	$wp_customize->get_section( 'background_image' )->description = esc_html__( 'Background may only be visible on wide screens.', 'shopinia' );
	// Add postMessage support for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// Rename the label to "Site Title Color" because this only affects the site title in this theme.
	$wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site Title Color', 'shopinia' );
	// Rename the label to "Display Site Title & Tagline" in order to make this option extra clear.
	$wp_customize->get_control( 'display_header_text' )->label = esc_html__( 'Display Site Title &amp; Tagline', 'shopinia' );
	// Add the featured content section in case it's not already there.
	$wp_customize->add_section( 'TMPMELA_FEATURED_CONTENT', array(
		'title'       => esc_html__( 'Featured Content', 'shopinia' ),
		'description' => sprintf( wp_kses( __( 'Use a <a href="%1$s">tag</a> to feature your posts. If no posts match the tag, <a href="%2$s">sticky posts</a> will be displayed instead.', 'shopinia' ), tmpmela_allowed_html()), admin_url( '/edit.php?tag=featured' ), admin_url( '/edit.php?show_sticky=1' ) ),
		'priority'    => 130,
	) );
	// Add the featured content layout setting and control.
	$wp_customize->add_setting( 'tmpmela_Featured_Content_layout', array(
		'default'           => 'grid',
		'sanitize_callback' => 'tmpmela_sanitize_layout',
	) );
	$wp_customize->add_control( 'tmpmela_Featured_Content_layout', array(
		'label'   => esc_html__( 'Layout', 'shopinia' ),
		'section' => 'TMPMELA_FEATURED_CONTENT',
		'type'    => 'select',
		'choices' => array(
			'grid'   => esc_html__( 'Grid',   'shopinia' ),
			'slider' => esc_html__( 'Slider', 'shopinia' ),
		),
	) );
}
add_action( 'customize_register', 'tmpmela_customize_register' );
/**
 * Sanitize the Featured Content layout value.
 *
 * @since TemplateMela 1.0
 *
 * @param string $layout Layout type.
 * @return string Filtered layout type (grid|slider).
 */
function tmpmela_sanitize_layout( $layout ) {
	if ( ! in_array( $layout, array( 'grid', 'slider' ) ) ) {
		$layout = 'grid';
	}
	return $layout;
}
/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since TemplateMela 1.0
 */
function tmpmela_customize_preview_js() {
	wp_enqueue_script( 'tmpmela_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20131205', true );
}
add_action( 'customize_preview_init', 'tmpmela_customize_preview_js' );
/**
 * Add contextual help to the Themes and Post edit screens.
 *
 * @since TemplateMela 1.0
 *
 * @return void
 */
function tmpmela_contextual_help() {
	if ( 'admin_head-edit.php' === current_filter() && 'post' !== $GLOBALS['typenow'] ) {
		return;
	}
	get_current_screen()->add_help_tab( array(
		'id'      => 'shopinia',
		'title'   => esc_html__( 'Template Mela', 'shopinia' ),
		'content' =>
			'<ul>' .
				'<li>' . sprintf( esc_html__( 'The home page features your choice of up to 6 posts prominently displayed in a grid or slider, controlled by the <a href="%1$s">featured</a> tag; you can change the tag and layout in <a href="%2$s">Appearance &rarr; Customize</a>. If no posts match the tag, <a href="%3$s">sticky posts</a> will be displayed instead.', 'shopinia' ), admin_url( '/edit.php?tag=featured' ), admin_url( 'customize.php' ), admin_url( '/edit.php?show_sticky=1' ) ) . '</li>' .
				'<li>' . sprintf( esc_html__( 'Enhance your site design by using <a href="%s">Featured Images</a> for posts you&rsquo;d like to stand out (also known as post thumbnails). This allows you to associate an image with your post without inserting it. Template Mela uses featured images for posts and pages&mdash;above the title&mdash;and in the Featured Content area on the home page.', 'shopinia' ), 'http://codex.wordpress.org/Post_Thumbnails#Setting_a_Post_Thumbnail' ) . '</li>' .
				'<li>' . sprintf( esc_html__( 'For an in-depth tutorial, and more tips and tricks, visit the <a href="%s">Template Mela documentation</a>.', 'shopinia' ), '#' ) . '</li>' .
			'</ul>',
	) );
}
add_action( 'admin_head-themes.php', 'tmpmela_contextual_help' );
add_action( 'admin_head-edit.php',   'tmpmela_contextual_help' );