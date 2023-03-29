<?php

namespace App\LiskovSubstitution\Before;

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

    /**
     * @return void
     */
    public function save(): void
    {
    }
}
