<?php
/**
 * @author Koji Kuno
 * @package oleindesign
 */

if ( ! function_exists( 'oleindesign_register_block_styles' ) ) {
	/**
	 * Register Block Styles
	 *
	 * @since 1.0.0
	 */
	function oleindesign_register_block_styles() {
		$block_styles = array(
			'core/image'            => array(
				'oleindesign-solid-shadow-image' => __( 'Solid Shadow', 'oleindesign' ),
				'oleindesign-blur-shadow-image'  => __( 'Blur Shadow', 'oleindesign' ),
			)
		);

		/**
		 * Filter hook for adding block style
		 */
		$block_styles = apply_filters( 'oleindesign_register_block_styles', $block_styles );

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}

	add_action( 'init', 'oleindesign_register_block_styles' );
}