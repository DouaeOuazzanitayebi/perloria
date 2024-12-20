<?php declare(strict_types=1);

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

use IteratorAggregate;
use Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface;

interface InflectorAggregateInterface extends ContainerAwareInterface, IteratorAggregate
{
    /**
     * Add an inflector to the aggregate.
     *
     * @param string   $type
     * @param callable $callback
     *
     * @return Inflector
     */
<<<<<<< HEAD
    public function add(string $type, ?callable $callback = null) : Inflector;
=======
    public function add(string $type, callable $callback = null) : Inflector;
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

    /**
     * Applies all inflectors to an object.
     *
     * @param  object $object
     * @return object
     */
    public function inflect($object);
}
