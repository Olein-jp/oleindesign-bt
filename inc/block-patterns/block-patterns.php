<?php
/**
 * @author Koji Kuno
 * @package oleindesign
 */

if ( ! function_exists( 'oleindesign_register_block_categories' ) ) {
	/**
	 * Register Block Categories
	 *
	 * @since 1.0.0
	 */
	function oleindesign_register_block_pattern_categories() {
		$oleindesign_block_pattern_categories = array(
			'oleindesign-cta'         => array( 'label' => __( 'CTA', 'oleindesign' ) ),
		);
		/**
		 * Filter to add block pattern categories
		 */
		$oleindesign_block_pattern_categories = apply_filters( 'oleindesign_register_block_pattern_categories', $oleindesign_block_pattern_categories );

		/**
		 * Register block pattern categories
		 */
		foreach ( $oleindesign_block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}
	}

	add_action( 'init', 'oleindesign_register_block_pattern_categories' );
}