<?php
/**
 * OrdersControllersServiceProvider class file.
 */

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

use Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider;
use Automattic\WooCommerce\Internal\Orders\CouponsController;
<<<<<<< HEAD
use Automattic\WooCommerce\Internal\Orders\OrderActionsRestController;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
use Automattic\WooCommerce\Internal\Orders\TaxesController;

/**
 * Service provider for the orders controller classes in the Automattic\WooCommerce\Internal\Orders namespace.
 */
<<<<<<< HEAD
class OrdersControllersServiceProvider extends AbstractInterfaceServiceProvider {
=======
class OrdersControllersServiceProvider extends AbstractServiceProvider {
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

	/**
	 * The classes/interfaces that are serviced by this service provider.
	 *
	 * @var array
	 */
	protected $provides = array(
		CouponsController::class,
		TaxesController::class,
<<<<<<< HEAD
		OrderActionsRestController::class,
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	);

	/**
	 * Register the classes.
	 */
	public function register() {
		$this->share( CouponsController::class );
		$this->share( TaxesController::class );
<<<<<<< HEAD
		$this->share_with_implements_tags( OrderActionsRestController::class );
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	}
}
