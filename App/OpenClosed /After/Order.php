<?php

namespace App\OpenClosed\After;

use App\OpenClosed\After\Shipping\Shipping;
use Exception;

/**
 * You can solve the problem by applying the Strategy pattern.
 * Start by extracting shipping methods into separate classes with a common interface.
 *
 * AFTER: adding a new shipping method doesn’t require changing existing classes.
 */
class Order
{
    /**
     * @var array
     */
    private array $lineItems;

    /**
     * @param Shipping $shipping
     */
    public function __construct(private Shipping $shipping)
    {}

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return 5;
    }

    /**
     * @return int
     */
    public function getTotalWeight(): int
    {
        return 10;
    }

    /**
     * @return float
     *
     * @throws Exception
     */
    public function getShippingCost(): float
    {
        return $this->shipping->getCost($this);
    }

    /**
     * @return string
     */
    public function getShippingDate(): string
    {
        return $this->shipping->getDate($this);
    }
}