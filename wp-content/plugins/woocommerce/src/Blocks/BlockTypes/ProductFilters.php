<?php
namespace Automattic\WooCommerce\Blocks\BlockTypes;

<<<<<<< HEAD
use Automattic\WooCommerce\Blocks\Utils\StyleAttributesUtils;
=======
use Automattic\WooCommerce\Blocks\Utils\BlockTemplateUtils;
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

/**
 * ProductFilters class.
 */
class ProductFilters extends AbstractBlock {
	/**
	 * Block name.
	 *
	 * @var string
	 */
	protected $block_name = 'product-filters';

	/**
	 * Register the context.
	 *
	 * @return string[]
	 */
	protected function get_block_type_uses_context() {
<<<<<<< HEAD
		return array( 'postId', 'query', 'queryId' );
	}

	/**
	 * Initialize this block type.
	 *
	 * - Hook into WP lifecycle.
	 * - Register the block with WordPress.
	 * - Hook into pre_render_block to update the query.
	 */
	protected function initialize() {
		add_filter( 'block_type_metadata_settings', array( $this, 'add_block_type_metadata_settings' ), 10, 2 );
		parent::initialize();
=======
		return array( 'postId' );
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	}

	/**
	 * Extra data passed through from server to client for block.
	 *
	 * @param array $attributes  Any attributes that currently are available from the block.
	 *                           Note, this will be empty in the editor context when the block is
	 *                           not in the post content on editor load.
	 */
	protected function enqueue_data( array $attributes = array() ) {
		global $pagenow;
		parent::enqueue_data( $attributes );

		$this->asset_data_registry->add( 'isBlockTheme', wc_current_theme_is_fse_theme() );
		$this->asset_data_registry->add( 'isProductArchive', is_shop() || is_product_taxonomy() );
		$this->asset_data_registry->add( 'isSiteEditor', 'site-editor.php' === $pagenow );
		$this->asset_data_registry->add( 'isWidgetEditor', 'widgets.php' === $pagenow || 'customize.php' === $pagenow );
	}

	/**
<<<<<<< HEAD
=======
	 * Return the dialog content.
	 *
	 * @return string
	 */
	protected function render_dialog() {
		$template_part = BlockTemplateUtils::get_template_part( 'product-filters-overlay' );

		$html = $this->render_template_part( $template_part );

		$html = strtr(
			'<dialog hidden role="dialog" aria-modal="true">
				{{html}}
			</dialog>',
			array(
				'{{html}}' => $html,
			)
		);

		$p = new \WP_HTML_Tag_Processor( $html );
		if ( $p->next_tag() ) {
			$p->set_attribute( 'data-wc-interactive', wp_json_encode( array( 'namespace' => 'woocommerce/product-filters' ), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ) );
			$p->set_attribute( 'data-wc-bind--hidden', '!state.isDialogOpen' );
			$p->set_attribute( 'data-wc-class--wc-block-product-filters--dialog-open', 'state.isDialogOpen' );
			$p->set_attribute( 'data-wc-class--wc-block-product-filters--with-admin-bar', 'context.hasPageWithWordPressAdminBar' );
			$html = $p->get_updated_html();
		}

		return $html;
	}

	/**
	 * This method is used to render the template part. For each template part, we parse the blocks and render them.
	 *
	 * @param string $template_part The template part to render.
	 * @return string The rendered template part.
	 */
	protected function render_template_part( $template_part ) {
		$parsed_blocks               = parse_blocks( $template_part );
		$wrapper_template_part_block = $parsed_blocks[0];
		$html                        = $wrapper_template_part_block['innerHTML'];
		$target_div                  = '</div>';

		$template_part_content_html = array_reduce(
			$wrapper_template_part_block['innerBlocks'],
			function ( $carry, $item ) {
				if ( 'core/template-part' === $item['blockName'] ) {
					$inner_template_part              = BlockTemplateUtils::get_template_part( $item['attrs']['slug'] );
					$inner_template_part_content_html = $this->render_template_part( $inner_template_part );

					return $carry . $inner_template_part_content_html;
				}
				return $carry . render_block( $item );
			},
			''
		);

		$html = str_replace( $target_div, $template_part_content_html . $target_div, $html );

		return $html;
	}

	/**
	 * Inject dialog into the product filters HTML.
	 *
	 * @param string $product_filters_html The Product Filters HTML.
	 * @param string $dialog_html The dialog HTML.
	 *
	 * @return string
	 */
	protected function inject_dialog( $product_filters_html, $dialog_html ) {
		// Find the position of the last </div>.
		$pos = strrpos( $product_filters_html, '</div>' );

		if ( $pos ) {
			// Inject the dialog_html at the correct position.
			$html = substr_replace( $product_filters_html, $dialog_html, $pos, 0 );

			return $html;
		}

		return $product_filters_html;
	}

	/**
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	 * Include and render the block.
	 *
	 * @param array    $attributes Block attributes. Default empty array.
	 * @param string   $content    Block content. Default empty string.
	 * @param WP_Block $block      Block instance.
	 * @return string Rendered block type output.
	 */
	protected function render( $attributes, $content, $block ) {
<<<<<<< HEAD
		$query_id      = $block->context['queryId'] ?? 0;
		$filter_params = $this->get_filter_params( $query_id );
		$block_context = array_merge(
			$block->context,
			array(
				'filterParams' => $filter_params,
			),
		);
		$inner_blocks  = array_reduce(
			$block->parsed_block['innerBlocks'],
			function ( $carry, $parsed_block ) use ( $block_context ) {
				$carry .= ( new \WP_Block( $parsed_block, $block_context ) )->render();
				return $carry;
			},
			''
		);
		$icontext      = array(
			'isOverlayOpened' => false,
			'params'          => $filter_params,
			'originalParams'  => $filter_params,
		);
		$classes       = array(
			'wc-block-product-filters' => true,
		);
		$styles        = array(
			'--wc-product-filters-text-color'       => StyleAttributesUtils::get_text_color_class_and_style( $attributes )['value'],
			'--wc-product-filters-background-color' => StyleAttributesUtils::get_background_color_class_and_style( $attributes )['value'],
		);

		if ( ! empty( $attributes['overlayIconSize'] ) ) {
			$styles['--wc-product-filters-overlay-icon-size'] = "{$attributes['overlayIconSize']}px";
		}

		$wrapper_attributes = array(
			'class'                            => implode( ' ', array_keys( array_filter( $classes ) ) ),
			'data-wc-interactive'              => wp_json_encode( array( 'namespace' => $this->get_full_block_name() ), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ),
			'data-wc-watch--navigation'        => 'callbacks.maybeNavigate',
			'data-wc-watch--scrolling'         => 'callbacks.scrollLimit',
			'data-wc-on--keyup'                => 'actions.closeOverlayOnEscape',
			'data-wc-navigation-id'            => $this->generate_navigation_id( $block ),
			'data-wc-context'                  => wp_json_encode( $icontext, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ),
			'data-wc-class--is-overlay-opened' => 'context.isOverlayOpened',
			'style'                            => array_reduce(
				array_keys( $styles ),
				function ( $carry, $key ) use ( $styles ) {
					if ( $styles[ $key ] ) {
						$carry .= $key . ':' . $styles[ $key ] . ';';
					}
					return $carry;
				},
				''
			),
		);

		ob_start();
		?>
		<div <?php echo get_block_wrapper_attributes( $wrapper_attributes ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
			<button
				class="wc-block-product-filters__open-overlay"
				data-wc-on--click="actions.openOverlay"
			>
				<?php if ( 'label-only' !== $attributes['overlayButtonType'] ) : ?>
					<?php echo $this->get_svg_icon( $attributes['overlayIcon'] ?? 'filter-icon-2' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				<?php endif; ?>
				<?php if ( 'icon-only' !== $attributes['overlayButtonType'] ) : ?>
					<span><?php echo esc_html__( 'Filter products', 'woocommerce' ); ?></span>
				<?php endif; ?>
			</button>
			<div class="wc-block-product-filters__overlay">
				<div class="wc-block-product-filters__overlay-wrapper">
					<div
						class="wc-block-product-filters__overlay-dialog"
						role="dialog"
					>
						<header class="wc-block-product-filters__overlay-header">
							<button
								class="wc-block-product-filters__close-overlay"
								data-wc-on--click="actions.closeOverlay"
							>
								<span><?php echo esc_html__( 'Close', 'woocommerce' ); ?></span>
								<?php echo $this->get_svg_icon( 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</button>
						</header>
						<div class="wc-block-product-filters__overlay-content">
							<?php echo $inner_blocks; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<footer
							class="wc-block-product-filters__overlay-footer"
						>
							<button
								class="wc-block-product-filters__apply wp-element-button"
								data-wc-on--click="actions.closeOverlay"
							>
								<span><?php echo esc_html__( 'Apply', 'woocommerce' ); ?></span>
							</button>
						</footer>
					</div>
				</div>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}

	/**
	 * Get SVG icon markup for a given icon name.
	 *
	 * @param string $name The name of the icon to retrieve.
	 * @return string SVG markup for the icon, or empty string if icon not found.
	 */
	private function get_svg_icon( string $name ) {
		$icons = array(
			'close'         => '<path d="M12 13.0607L15.7123 16.773L16.773 15.7123L13.0607 12L16.773 8.28772L15.7123 7.22706L12 10.9394L8.28771 7.22705L7.22705 8.28771L10.9394 12L7.22706 15.7123L8.28772 16.773L12 13.0607Z" fill="currentColor"/>',
			'filter-icon-1' => '<path fill-rule="evenodd" clip-rule="evenodd" d="M10.541 4.20007H5.20245C4.27908 4.20007 3.84904 5.34461 4.54394 5.95265L10.541 11.2001V16.2001L10.541 17.9428C10.541 18.1042 10.619 18.2558 10.7504 18.3496L13.2504 20.1353C13.5813 20.3717 14.041 20.1352 14.041 19.7285V11.2001L19.3339 5.90718C19.9639 5.27722 19.5177 4.20007 18.6268 4.20007H13.041H10.541Z" fill="currentColor"/>',
			'filter-icon-2' => '<path d="M10 17.5H14V16H10V17.5ZM6 6V7.5H18V6H6ZM8 12.5H16V11H8V12.5Z" fill="currentColor"/>',
			'filter-icon-3' => '<path d="M5 5H19V6.5H5V5Z" fill="currentColor"/><path d="M5 11.25H19V12.75H5V11.25Z" fill="currentColor"/><path d="M19 17.5H5V19H19V17.5Z" fill="currentColor"/>',
			'filter-icon-4' => '<path d="M19 7.5H11.372C11.0631 6.62611 10.2297 6 9.25 6C8.27034 6 7.43691 6.62611 7.12803 7.5H5V9H7.12803C7.43691 9.87389 8.27034 10.5 9.25 10.5C10.2297 10.5 11.0631 9.87389 11.372 9H19V7.5Z" fill="currentColor"/><path d="M19 15H16.872C16.5631 14.1261 15.7297 13.5 14.75 13.5C13.7703 13.5 12.9369 14.1261 12.628 15H5V16.5H12.628C12.9369 17.3739 13.7703 18 14.75 18C15.7297 18 16.5631 17.3739 16.872 16.5H19V15Z" fill="currentColor"/>',
		);

		if ( ! isset( $icons[ $name ] ) ) {
			return '';
		}

		return sprintf(
			'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">%s</svg>',
			$icons[ $name ]
		);
=======
		$tags = new \WP_HTML_Tag_Processor( $content );
		if ( $tags->next_tag() ) {
			$tags->set_attribute( 'data-wc-interactive', wp_json_encode( array( 'namespace' => 'woocommerce/' . $this->block_name ), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ) );
			$tags->set_attribute(
				'data-wc-context',
				wp_json_encode(
					array(
						'isDialogOpen'                 => false,
						'hasPageWithWordPressAdminBar' => false,
						'params'                       => $this->get_filter_query_params( 0 ),
						'originalParams'               => $this->get_filter_query_params( 0 ),
					),
					JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP
				)
			);
			$tags->set_attribute( 'data-wc-navigation-id', $this->generate_navigation_id( $block ) );
			$tags->set_attribute( 'data-wc-watch', 'callbacks.maybeNavigate' );

			if (
				'always' === $attributes['overlay'] ||
				( 'mobile' === $attributes['overlay'] && wp_is_mobile() )
			) {
				return $this->inject_dialog( $tags->get_updated_html(), $this->render_dialog() );
			}

			return $tags->get_updated_html();
		}
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	}

	/**
	 * Generate a unique navigation ID for the block.
	 *
	 * @param mixed $block - Block instance.
	 * @return string - Unique navigation ID.
	 */
	private function generate_navigation_id( $block ) {
		return sprintf(
			'wc-product-filters-%s',
			md5( wp_json_encode( $block->parsed_block['innerBlocks'] ) )
		);
	}

	/**
	 * Parse the filter parameters from the URL.
	 * For now we only get the global query params from the URL. In the future,
	 * we should get the query params based on $query_id.
	 *
	 * @param int $query_id Query ID.
	 * @return array Parsed filter params.
	 */
<<<<<<< HEAD
	private function get_filter_params( $query_id ) {
=======
	private function get_filter_query_params( $query_id ) {
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
		// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
		$request_uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '';

		$parsed_url = wp_parse_url( esc_url_raw( $request_uri ) );

		if ( empty( $parsed_url['query'] ) ) {
			return array();
		}

		parse_str( $parsed_url['query'], $url_query_params );

		/**
		 * Filters the active filter data provided by filter blocks.
		 *
		 * @since 11.7.0
		 *
		 * @param array $filter_param_keys The active filters data
		 * @param array $url_param_keys    The query param parsed from the URL.
		 *
		 * @return array Active filters params.
		 */
		$filter_param_keys = array_unique( apply_filters( 'collection_filter_query_param_keys', array(), array_keys( $url_query_params ) ) );

		return array_filter(
			$url_query_params,
			function ( $key ) use ( $filter_param_keys ) {
				return in_array( $key, $filter_param_keys, true );
			},
			ARRAY_FILTER_USE_KEY
		);
	}
<<<<<<< HEAD

	/**
	 * This block renders inner blocks manually so we need to skip default
	 * rendering routine for its inner blocks
	 *
	 * @param array $settings Array of determined settings for registering a block type.
	 * @param array $metadata Metadata provided for registering a block type.
	 * @return array
	 */
	public function add_block_type_metadata_settings( $settings, $metadata ) {
		if ( ! empty( $metadata['name'] ) && $this->get_full_block_name() === $metadata['name'] ) {
			$settings['skip_inner_blocks'] = true;
		}
			return $settings;
	}
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
