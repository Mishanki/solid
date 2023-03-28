<?php

namespace App\OpenClosed\After\Shipping;

use App\OpenClosed\After\Order;

interface Shipping
{
    /**
     * @param Order $order
     *
     * @return float
     */
    public function getCost(Order $order): float;

    /**
     * @param Order $order
     *
     * @return string
     */
    public function getDate(Order $order): string;
}