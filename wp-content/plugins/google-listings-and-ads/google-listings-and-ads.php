<?php
/**
 * Plugin Name: Google for WooCommerce
 * Plugin URL: https://wordpress.org/plugins/google-listings-and-ads/
 * Description: Native integration with Google that allows merchants to easily display their products across Google’s network.
<<<<<<< HEAD
 * Version: 2.9.3
=======
 * Version: 2.9.2
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
 * Author: WooCommerce
 * Author URI: https://woocommerce.com/
 * Text Domain: google-listings-and-ads
 * Requires at least: 5.9
 * Tested up to: 6.7
 * Requires PHP: 7.4
 * Requires PHP Architecture: 64 bits
 * Requires Plugins: woocommerce
<<<<<<< HEAD
 * WC requires at least: 7.9
 * WC tested up to: 9.5
=======
 * WC requires at least: 6.9
 * WC tested up to: 9.4
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
 * Woo:
 *
 * @package WooCommerce\Admin
 */

use Automattic\Jetpack\Config;
use Automattic\WooCommerce\GoogleListingsAndAds\Container;
use Automattic\WooCommerce\GoogleListingsAndAds\Autoloader;
use Automattic\WooCommerce\GoogleListingsAndAds\Internal\Requirements\PluginValidator;
use Automattic\WooCommerce\GoogleListingsAndAds\Internal\Requirements\VersionValidator;
use Automattic\WooCommerce\GoogleListingsAndAds\PluginFactory;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Psr\Container\ContainerInterface;
use Automattic\WooCommerce\Utilities\FeaturesUtil;

defined( 'ABSPATH' ) || exit;

<<<<<<< HEAD
define( 'WC_GLA_VERSION', '2.9.3' ); // WRCS: DEFINED_VERSION.
define( 'WC_GLA_MIN_PHP_VER', '7.4' );
define( 'WC_GLA_MIN_WC_VER', '7.9' );
=======
define( 'WC_GLA_VERSION', '2.9.2' ); // WRCS: DEFINED_VERSION.
define( 'WC_GLA_MIN_PHP_VER', '7.4' );
define( 'WC_GLA_MIN_WC_VER', '6.9' );
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

// Load and initialize the autoloader.
require_once __DIR__ . '/src/Autoloader.php';
if ( ! Autoloader::init() ) {
	return;
}

// Validate PHP Version and Architecture
if ( ! VersionValidator::instance()->validate() ) {
	return;
}

// Register activation hook
register_activation_hook(
	__FILE__,
	function () {
		PluginFactory::instance()->activate();
	}
);

// HPOS compatibility declaration.
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( FeaturesUtil::class ) ) {
			FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__ );
			FeaturesUtil::declare_compatibility( 'cart_checkout_blocks', __FILE__ );
			FeaturesUtil::declare_compatibility( 'product_block_editor', __FILE__ );
		}
	}
);

// Hook much of our plugin after WooCommerce is loaded.
add_action(
	'woocommerce_loaded',
	function () {
		PluginFactory::instance()->register();
	},
	1
);

// Register deactivation hook
register_deactivation_hook(
	__FILE__,
	function () {
		PluginFactory::instance()->deactivate();
	}
);

/**
 * Get our main container object.
 *
 * @return ContainerInterface
 */
function woogle_get_container(): ContainerInterface {
	static $container = null;
	if ( null === $container ) {
		$container = new Container();
	}

	return $container;
}

/**
 * Jetpack-config will initialize the modules on "plugins_loaded" with priority 2,
 * so this code needs to be run before that.
 */
add_action(
	'plugins_loaded',
	function () {
		// Check requirements.
		if ( ! PluginValidator::validate() ) {
			return;
		}
		woogle_get_container()->get( Config::class );
	},
	1
);
