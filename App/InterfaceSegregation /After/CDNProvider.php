<?php

namespace App\InterfaceSegregation\After;

interface CDNProvider
{
    /**
     * @return string
     */
    public function getCDNAddress(): string;
}
