<<<<<<< HEAD
<?php
/**
 * @package   Retailsy
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storefit/features/storefit-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-banner.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-feature-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-typography.php';

if ( ! function_exists( 'ecommerce_comp_retailsy_frontpage_sections' ) ) :
	function ecommerce_comp_retailsy_frontpage_sections() {	
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storefit/sections/section-slider.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/sections/section-info.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/sections/section-banner.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/sections/section-feature-product.php';
    }
	add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_frontpage_sections' );
=======
<?php
/**
 * @package   Retailsy
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storefit/features/storefit-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-banner.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-feature-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/features/retailsy-typography.php';

if ( ! function_exists( 'ecommerce_comp_retailsy_frontpage_sections' ) ) :
	function ecommerce_comp_retailsy_frontpage_sections() {	
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storefit/sections/section-slider.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/sections/section-info.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/sections/section-banner.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/sections/section-feature-product.php';
    }
	add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_frontpage_sections' );
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
endif;