<?php

namespace App\InterfaceSegregation\Before;

/**
 * At the time you assumed that all cloud providers have the same broad spectrum of features as Amazon.
 * But when it came to implementing support for another provider, it turned out that most of the interfaces of the library are too wide.
 * Some methods describe features that other cloud providers just don’t have.
 *
 * BEFORE: not all clients can satisfy the requirements of the bloated interface.
 */
class Amazon implements CloudProvider
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
