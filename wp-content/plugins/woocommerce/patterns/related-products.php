<?php
/**
 * Title: Related Products
 * Slug: woocommerce-blocks/related-products
 * Categories: WooCommerce
 * Inserter: false
 */
?>

<<<<<<< HEAD
<!-- wp:woocommerce/product-collection {"align":"wide","queryId":0,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":false},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the product being viewed."}} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
		<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
=======
<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide">
		<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":5},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
		<div class="wp-block-query">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
				<?php
					echo esc_html__(
						'Related products',
						'woocommerce'
					)
					?>
			</h2>
<<<<<<< HEAD
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
			<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->
			<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
<!-- /wp:woocommerce/product-collection -->
=======
			<!-- /wp:heading -->

			<!-- wp:post-template {"className":"products-block-post-template","__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
			<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

			<!-- wp:post-title {"textAlign":"center","level":3,"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

			<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:woocommerce/related-products -->
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
