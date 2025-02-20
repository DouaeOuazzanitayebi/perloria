<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

use Automattic\WooCommerce\Admin\Features\Features;
use Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task;
use Automattic\WooCommerce\Internal\Admin\WcPayWelcomePage;

/**
 * Payments Task
 */
class Payments extends Task {

	/**
	 * Used to cache is_complete() method result.
	 *
	 * @var null
	 */
	private $is_complete_result = null;

	/**
	 * ID.
	 *
	 * @return string
	 */
	public function get_id() {
		return 'payments';
	}

	/**
	 * Title.
	 *
	 * @return string
	 */
	public function get_title() {
		return __( 'Get paid', 'woocommerce' );
	}

	/**
	 * Content.
	 *
	 * @return string
	 */
	public function get_content() {
		return __(
			'Choose payment providers and enable payment methods at checkout.',
			'woocommerce'
		);
	}

	/**
	 * Time.
	 *
	 * @return string
	 */
	public function get_time() {
		return __( '2 minutes', 'woocommerce' );
	}

	/**
	 * Task completion.
	 *
	 * @return bool
	 */
	public function is_complete() {
		if ( $this->is_complete_result === null ) {
			$this->is_complete_result = self::has_gateways();
		}

		return $this->is_complete_result;
	}

	/**
	 * Task visibility.
	 *
	 * @return bool
	 */
	public function can_view() {
		// The task is visible if WooPayments is not supported in the current store location country.
		// Otherwise, the WooPayments task will be shown.
		return Features::is_enabled( 'payment-gateway-suggestions' ) && ! WooCommercePayments::is_supported();
	}

	/**
	 * Check if the store has any enabled gateways.
	 *
	 * @return bool
	 */
	public static function has_gateways() {
		$gateways         = WC()->payment_gateways->get_available_payment_gateways();
		$enabled_gateways = array_filter(
			$gateways,
			function( $gateway ) {
				return 'yes' === $gateway->enabled;
			}
		);

		return ! empty( $enabled_gateways );
	}
<<<<<<< HEAD
=======

	/**
	 * Action URL.
	 *
	 * @return string
	 */
	public function get_action_url() {
		// Check if the WooPayments plugin is active and the store is supported.
		if ( WooCommercePayments::is_supported() && WooCommercePayments::is_wcpay_active() ) {
			// If WooPayments is connected, point to the WooPayments overview page.
			if ( WooCommercePayments::is_connected() ) {
				return add_query_arg( 'from', 'WCADMIN_PAYMENT_TASK', admin_url( 'admin.php?page=wc-admin&path=/payments/overview' ) );
			}

			// Point to the WooPayments Connect page.
			return add_query_arg( 'from', 'WCADMIN_PAYMENT_TASK', admin_url( 'admin.php?page=wc-admin&path=/payments/connect' ) );
		}

		// Check if there is an active WooPayments incentive via the welcome page.
		if ( WcPayWelcomePage::instance()->is_incentive_visible() ) {
			// Point to the WooPayments welcome page.
			return add_query_arg( 'from', 'WCADMIN_PAYMENT_TASK', admin_url( 'admin.php?page=wc-admin&path=/wc-pay-welcome-page' ) );
		}

		return admin_url( 'admin.php?page=wc-admin&task=payments' );
	}
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
