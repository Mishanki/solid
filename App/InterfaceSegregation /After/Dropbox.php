<?php

namespace App\InterfaceSegregation\After;

use Exception;

/**
 * AFTER: one bloated interface is broken down into a set of more granular interfaces.
 */
class Dropbox implements CloudStorageProvider
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
}