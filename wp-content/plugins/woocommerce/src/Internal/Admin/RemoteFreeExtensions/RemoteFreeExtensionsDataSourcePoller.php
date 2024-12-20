<?php

namespace Automattic\WooCommerce\Internal\Admin\RemoteFreeExtensions;

use Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller;
<<<<<<< HEAD
use WC_Helper;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
/**
 * Specs data source poller class for remote free extensions.
 */
class RemoteFreeExtensionsDataSourcePoller extends DataSourcePoller {

	const ID = 'remote_free_extensions';

<<<<<<< HEAD
	/**
	 * Default data sources array.
	 *
	 * @deprecated since 9.5.0. Use get_data_sources() instead.
	 */
	const DATA_SOURCES = array();
=======
	const DATA_SOURCES = array(
		'https://woocommerce.com/wp-json/wccom/obw-free-extensions/4.0/extensions.json',
	);
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

	/**
	 * Class instance.
	 *
<<<<<<< HEAD
	 * @var RemoteFreeExtensionsDataSourcePoller instance
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
					'spec_key' => 'key',
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
			WC_Helper::get_woocommerce_com_base_url() . 'wp-json/wccom/obw-free-extensions/4.0/extensions.json',
		);
	}
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
