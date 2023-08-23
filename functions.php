<?php
/**
 * functions.php
 *
 * @package oleindesign
 * @author Olein-jp
 * @license GPL-2.0+
 */
if ( ! function_exists( 'oleindesign_setup' ) ) {
	/**
	 * Setup theme
	 */
	function oleindesign_setup() {

		// Add support for block styles.
//		add_theme_support( 'wp-block-styles' );

		// Remove default block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Add support for editor styles.
		$files         = glob( get_template_directory() . '/assets/css/block/*.css' );
		$editor_styles = array( 'assets/css/style.css' );

		foreach ( $files as $file ) {
			$filename        = 'assets/css/block/' . basename( $file, '.css' ) . '.css';
			$editor_styles[] = $filename;
		}

		add_editor_style( $editor_styles );

		// Add Translation
		load_theme_textdomain( 'oleindesign', get_template_directory() . '/languages' );

	}
}
add_action( 'after_setup_theme', 'oleindesign_setup' );

if ( ! function_exists( 'oleindesign_styles' ) ) {
	/**
	 * Enqueue styles
	 */
	function oleindesign_styles() {

		wp_enqueue_style(
			'oleindesign-styles',
			get_template_directory_uri() . '/assets/css/style.css',
			array(),
			wp_get_theme( 'oleindesign' )->get( 'Version' )
		);
	}

	add_action( 'wp_enqueue_scripts', 'oleindesign_styles' );
}

if ( ! function_exists( 'oleindesign_enqueue_block_styles' ) ) {
	/**
	 * Enqueue Block Style CSS
	 *
	 * @since 3.0.0
	 */
	function oleindesign_enqueue_block_styles(): void {
		$files = glob( get_template_directory() . '/assets/css/block/*.css' );

		// Enqueue block styles only on frontend.
		if ( ! is_admin() ) {

			foreach ( $files as $file ) {

				$filename   = basename( $file, '.css' );
				$block_name = str_replace( 'wp-block-', 'core/', $filename );

				wp_enqueue_block_style(
					$block_name,
					array(
						'handle' => "oleindesign-block-{$filename}",
						'src'    => get_theme_file_uri( "/assets/css/block/{$filename}.css" ),
						'path'   => get_theme_file_path( "/assets/css/block/{$filename}.css" ),
					)
				);
			}
		}
	}
	add_action( 'init', 'oleindesign_enqueue_block_styles' );
}

/**
 * Include Registration of Block Styles
 */
require 'inc/block-styles/block-styles.php';

/**
 * Include Registration of Block Categories and Patterns
 */
require 'inc/block-patterns/block-patterns.php';