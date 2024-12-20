<?php

namespace Automattic\WooCommerce\Internal\Admin\WCPayPromotion;

use Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller;
<<<<<<< HEAD
use WC_Helper;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

/**
 * Specs data source poller class for WooPayments Promotion.
 */
class WCPayPromotionDataSourcePoller extends DataSourcePoller {

	const ID = 'payment_method_promotion';

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
		'https://woocommerce.com/wp-json/wccom/payment-gateway-suggestions/2.0/payment-method/promotions.json',
	);
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

	/**
	 * Class instance.
	 *
	 * @var WCPayPromotionDataSourcePoller instance
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
		$data_sources = array(
			WC_Helper::get_woocommerce_com_base_url() . 'wp-json/wccom/payment-gateway-suggestions/2.0/payment-method/promotions.json',
		);

		// Add country query param to data sources.
		$base_location             = wc_get_base_location();
		$data_sources_with_country = array_map(
			function ( $url ) use ( $base_location ) {
				return add_query_arg(
					'country',
					$base_location['country'],
					$url
				);
			},
			$data_sources
		);
		return $data_sources_with_country;
	}
=======
			// Add country query param to data sources.
			$base_location = wc_get_base_location();
			$data_sources  = array_map(
				function ( $url ) use ( $base_location ) {
					return add_query_arg(
						'country',
						$base_location['country'] ?? '',
						$url
					);
				},
				self::DATA_SOURCES
			);

			self::$instance = new self( self::ID, $data_sources );
		}
		return self::$instance;
	}
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
