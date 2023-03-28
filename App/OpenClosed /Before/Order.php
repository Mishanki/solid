<?php

namespace App\OpenClosed\Before;

use Exception;

/**
 * You have an e-commerce application with an Order class that calculates shipping costs and all shipping methods are hardcoded inside the class.
 * If you need to add a new shipping method, you have to change the code of the Order class and risk breaking it.
 *
 * BEFORE: you have to change the Order class whenever you add a new shipping method to the app.
 */
class Order
{
    /**
     * @var array
     */
    private array $lineItems;

    /**
     * @param string $shipping
     */
    public function __construct(private string $shipping)
    {}

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return 50;
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
        if ($this->shipping == 'ground') {
            if ($this->getTotal() > 100) {
                return 0;
            }

            return max(10, $this->getTotalWeight() * 1.5);
        }

        if ($this->shipping == 'air') {
            return max(20, $this->getTotalWeight() * 3);
        }

        throw new Exception('Shipping statement calculation error');
    }

    /**
     * @return string
     */
    public function getShippingDate(): string
    {
        return date('Y-m-d', strtotime('+1 DAY'));
    }
}