<?php

namespace App\OpenClosed\After\Shipping;

use App\OpenClosed\After\Order;

class Air implements Shipping
{
    public function getCost(Order $order): float
    {
        return max(20, $order->getTotalWeight() * 3);
    }

    public function getDate(Order $order): string
    {
        return date('Y-m-d', strtotime('+1 DAY'));
    }
}