<?php

namespace App\InterfaceSegregation\After;

/**
 * AFTER: one bloated interface is broken down into a set of more granular interfaces.
 */
class Amazon implements CloudHostingProvider, CDNProvider, CloudStorageProvider
{
    /**
     * @param string $name
     *
     * @return void
     */
    public function storeFile(string $name): void
    {
        // TODO some specific code
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function getFile(string $name): string
    {
        return 'some-file-data';
    }

    /**
     * @param string $region
     *
     * @return void
     */
    public function createServer(string $region)
    {
        // TODO some specific code
    }

    /**
     * @param string $region
     *
     * @return void
     */
    public function listServers(string $region)
    {
        // TODO some specific code
    }

    /**
     * @return string
     */
    public function getCDNAddress(): string
    {
        return 'some-cdn-address';
    }
}
