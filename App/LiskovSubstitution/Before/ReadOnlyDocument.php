<?php

namespace App\LiskovSubstitution\Before;

class ReadOnlyDocument extends Document
{
    /**
     * @return void
     *
     * @throws \Exception
     */
    public function save(): void
    {
        throw new \Exception('Can`t save a read-only document');
    }
}