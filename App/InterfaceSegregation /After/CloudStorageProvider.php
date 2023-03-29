<?php

namespace App\InterfaceSegregation\After;

interface CloudStorageProvider
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
}
