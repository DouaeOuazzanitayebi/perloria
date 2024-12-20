<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

<<<<<<< HEAD
use Automattic\WooCommerce\Blocks\Utils\StyleAttributesUtils;

=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
/**
 * ProductReviews class.
 */
class ProductReviews extends AbstractBlock {
	/**
	 * Block name.
	 *
	 * @var string
	 */
	protected $block_name = 'product-reviews';

	/**
	 * It isn't necessary register block assets because it is a server side block.
	 */
	protected function register_block_type_assets() {
		return null;
	}

	/**
	 * Render the block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content Block content.
	 * @param WP_Block $block Block instance.
	 *
	 * @return string Rendered block output.
	 */
	protected function render( $attributes, $content, $block ) {
		ob_start();

		rewind_posts();
		while ( have_posts() ) {
			the_post();
			comments_template();
		}

		$reviews = ob_get_clean();

<<<<<<< HEAD
=======
		$classname = $attributes['className'] ?? '';

>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
		return sprintf(
			'<div class="wp-block-woocommerce-product-reviews %1$s">
				%2$s
			</div>',
<<<<<<< HEAD
			StyleAttributesUtils::get_classes_by_attributes( $attributes, array( 'extra_classes' ) ),
=======
			esc_attr( $classname ),
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
			$reviews
		);
	}
}
