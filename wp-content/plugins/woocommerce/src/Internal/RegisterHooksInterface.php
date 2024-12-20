<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\Internal;

/**
 * Interface RegisterHooksInterface
 *
<<<<<<< HEAD
 * The following must be added at the end of the 'init_hooks' method in the 'WooCommerce' class
 * for each class implementing this interface:
 * $container->get( <full class name>::class )->register();
 *
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
 * @since 8.5.0
 */
interface RegisterHooksInterface {

	/**
	 * Register this class instance to the appropriate hooks.
	 *
	 * @return void
	 */
	public function register();
}
