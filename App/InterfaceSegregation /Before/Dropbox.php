<?php

namespace App\InterfaceSegregation\Before;

use Exception;

/**
 * BEFORE: not all clients can satisfy the requirements of the bloated interface.
 */
class Dropbox implements CloudProvider
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
     *
     * @throws Exception
     */
    public function createServer(string $region)
    {
        throw new Exception('Not implemented');
    }

    /**
     * @param string $region
     *
     * @return void
     *
     * @throws Exception
     */
    public function listServers(string $region)
    {
        throw new Exception('Not implemented');
    }

    /**
     * @return string
     *
     * @throws Exception
     */
    public function getCDNAddress(): string
    {
        throw new Exception('Not implemented');
    }
}