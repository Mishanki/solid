<?php

namespace App\LiskovSubstitution\Before;

class WritableDocument extends Document
{
    /**
     * @return void
     */
    public function save(): void
    {
    }
}