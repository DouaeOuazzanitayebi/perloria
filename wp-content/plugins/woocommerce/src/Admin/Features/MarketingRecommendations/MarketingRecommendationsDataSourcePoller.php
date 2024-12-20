<?php

namespace Automattic\WooCommerce\Admin\Features\MarketingRecommendations;

use Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller;
<<<<<<< HEAD
use WC_Helper;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

/**
 * Specs data source poller class for marketing recommendations.
 */
class MarketingRecommendationsDataSourcePoller extends DataSourcePoller {

	/**
	 * Data Source Poller ID.
	 */
	const ID = 'marketing_recommendations';

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
		'https://woocommerce.com/wp-json/wccom/marketing-tab/1.3/recommendations.json',
	);
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

	/**
	 * Class instance.
	 *
<<<<<<< HEAD
	 * @var MarketingRecommendationsDataSourcePoller instance
=======
	 * @var Analytics instance
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	 */
	protected static $instance = null;

	/**
	 * Get class instance.
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self(
				self::ID,
<<<<<<< HEAD
				self::get_data_sources(),
=======
				self::DATA_SOURCES,
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
				array(
					'spec_key' => 'product',
				)
			);
		}
		return self::$instance;
	}
<<<<<<< HEAD

	/**
	 * Get data sources.
	 *
	 * @return array
	 */
	public static function get_data_sources() {
		return array(
			WC_Helper::get_woocommerce_com_base_url() . 'wp-json/wccom/marketing-tab/1.3/recommendations.json',
		);
	}
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
