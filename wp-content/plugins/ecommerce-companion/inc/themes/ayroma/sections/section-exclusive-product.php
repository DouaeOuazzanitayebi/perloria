<<<<<<< HEAD
<?php  
if ( ! function_exists( 'ecommerce_comp_ayroma_product' ) ) :
	function ecommerce_comp_ayroma_product() {
	$exclusive_product_setting_hs		= get_theme_mod('exclusive_product_setting_hs','1');
	$exclusive_product_ttl 				= get_theme_mod('exclusive_product_ttl',__('Exclusive Product','ecommerce-companion'));	
	$exclusive_product_cat				= get_theme_mod('exclusive_product_cat');
if($exclusive_product_setting_hs=='1'):	
if ( class_exists( 'woocommerce' ) ) {
$args                   = array(
	'post_type' => 'product',
	'posts_per_page' => 20,
);
if(!empty($exclusive_product_cat)):
$args['tax_query'] = array(
	array(
		'taxonomy' => 'product_cat',
		'field' => 'slug',
		'terms' => $exclusive_product_cat,
	),
);	
endif;
?>	
<section class="exclusive-products pt-default exclusive-products-home" id="exclusive-products">
	<!-- <div class="container-fluid"> -->
	<div class="container">
		<div class="row">
			<?php if(!empty($exclusive_product_ttl)): ?>
				<div class="col-12 text-center">
					<div class="section-title"><?php echo wp_kses_post($exclusive_product_ttl); ?></div>
				</div>
			<?php endif; ?>
			<?php
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			<div class="col-12 col-md-6 col-lg-3 wow fadeInRight slower">
				<ul class="products">
					<?php get_template_part('woocommerce/content','product'); ?>
				</ul>
			</div>
			<?php endwhile; ?>
			<?php  wp_reset_postdata(); ?>
			<!-- </div> -->
		</div>
	</div>
</section>
<?php } endif; }
endif;
if ( function_exists( 'ecommerce_comp_ayroma_product' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 13, 'ecommerce_comp_ayroma_product' );
add_action( 'aromatic_sections', 'ecommerce_comp_ayroma_product', absint( $section_priority ) );
}
=======
<?php  
if ( ! function_exists( 'ecommerce_comp_ayroma_product' ) ) :
	function ecommerce_comp_ayroma_product() {
	$exclusive_product_setting_hs		= get_theme_mod('exclusive_product_setting_hs','1');
	$exclusive_product_ttl 				= get_theme_mod('exclusive_product_ttl',__('Exclusive Product','ecommerce-companion'));	
	$exclusive_product_cat				= get_theme_mod('exclusive_product_cat');
if($exclusive_product_setting_hs=='1'):	
if ( class_exists( 'woocommerce' ) ) {
$args                   = array(
	'post_type' => 'product',
	'posts_per_page' => 20,
);
if(!empty($exclusive_product_cat)):
$args['tax_query'] = array(
	array(
		'taxonomy' => 'product_cat',
		'field' => 'slug',
		'terms' => $exclusive_product_cat,
	),
);	
endif;
?>	
<section class="exclusive-products pt-default exclusive-products-home" id="exclusive-products">
	<!-- <div class="container-fluid"> -->
	<div class="container">
		<div class="row">
			<?php if(!empty($exclusive_product_ttl)): ?>
				<div class="col-12 text-center">
					<div class="section-title"><?php echo wp_kses_post($exclusive_product_ttl); ?></div>
				</div>
			<?php endif; ?>
			<?php
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			<div class="col-12 col-md-6 col-lg-3 wow fadeInRight slower">
				<ul class="products">
					<?php get_template_part('woocommerce/content','product'); ?>
				</ul>
			</div>
			<?php endwhile; ?>
			<?php  wp_reset_postdata(); ?>
			<!-- </div> -->
		</div>
	</div>
</section>
<?php } endif; }
endif;
if ( function_exists( 'ecommerce_comp_ayroma_product' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 13, 'ecommerce_comp_ayroma_product' );
add_action( 'aromatic_sections', 'ecommerce_comp_ayroma_product', absint( $section_priority ) );
}
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
?>