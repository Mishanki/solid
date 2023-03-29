<?php

namespace App\InterfaceSegregation\After;

interface CloudHostingProvider
{
    /**
     * @param string $region
     *
     * @return void
     */
    public function createServer(string $region);

    /**
     * @param string $region
     *
     * @return void
     */
    public function listServers(string $region);
}
