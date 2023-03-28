<?php

namespace App\OpenClosed\After\Shipping;

use App\OpenClosed\After\Order;

class Ground implements Shipping
{
    /**
     * @param Order $order
     *
     * @return float
     */
    public function getCost(Order $order): float
    {
        if ($order->getTotal() > 100) {
            return 0;
        }

        return max(10, $order->getTotalWeight() * 1.5);
    }

    /**
     * @param Order $order
     *
     * @return string
     */
    public function getDate(Order $order): string
    {
        return date('Y-m-d', strtotime('+3 DAY'));
    }
}