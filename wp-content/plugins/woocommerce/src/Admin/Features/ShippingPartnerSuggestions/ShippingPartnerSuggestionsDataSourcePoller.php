<?php

namespace Automattic\WooCommerce\Admin\Features\ShippingPartnerSuggestions;

use Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller;
<<<<<<< HEAD
use WC_Helper;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

/**
 * Specs data source poller class for shipping partner suggestions.
 */
class ShippingPartnerSuggestionsDataSourcePoller extends DataSourcePoller {

	/**
	 * Data Source Poller ID.
	 */
	const ID = 'shipping_partner_suggestions';

	/**
	 * Default data sources array.
<<<<<<< HEAD
	 *
	 * @deprecated since 9.5.0. Use get_data_sources() instead.
	 */
	const DATA_SOURCES = array();
=======
	 */
	const DATA_SOURCES = array(
		'https://woocommerce.com/wp-json/wccom/shipping-partner-suggestions/2.0/suggestions.json',
	);
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

	/**
	 * Class instance.
	 *
	 * @var ShippingPartnerSuggestionsDataSourcePoller instance
	 */
	protected static $instance = null;

	/**
	 * Get class instance.
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
<<<<<<< HEAD
			self::$instance = new self( self::ID, self::get_data_sources() );
		}
		return self::$instance;
	}

	/**
	 * Get data sources.
	 *
	 * @return array
	 */
	public static function get_data_sources() {
		return array(
			WC_Helper::get_woocommerce_com_base_url() . 'wp-json/wccom/shipping-partner-suggestions/2.0/suggestions.json',
		);
	}
=======
			self::$instance = new self( self::ID, self::DATA_SOURCES );
		}
		return self::$instance;
	}
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
