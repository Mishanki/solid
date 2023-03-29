<?php

namespace App\InterfaceSegregation\Before;

interface CloudProvider
{
    /**
     * @param string $name
     *
     * @return void
     */
    public function storeFile(string $name): void;

    /**
     * @param string $name
     *
     * @return string
     */
    public function getFile(string $name): string;

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

    /**
     * @return string
     */
    public function getCDNAddress(): string;
}
