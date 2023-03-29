<?php

namespace App\LiskovSubstitution\After;

class Document
{
    /**
     * @var string
     */
    private string $data;

    /**
     * @var string
     */
    private string $fileName;

    /**
     * @return void
     */
    public function open(): void
    {
    }
}
