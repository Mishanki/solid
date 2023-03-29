<?php

namespace App\LiskovSubstitution\After;

use App\LiskovSubstitution\Before\WritableDocument;

/**
 * AFTER: the problem is solved after making the read-only document class the base class of the hierarchy.
 */
class Project
{
    /**
     * @param array<Document> $allDocs
     * @param array<WritableDocument> $writableDocs
     */
    public function __construct(
        protected array $allDocs = [],
        protected array $writableDocs = [],
    ) {
    }

    /**
     * @return void
     */
    public function openAll(): void
    {
        foreach ($this->allDocs as $document) {
            $document->open();
        }
    }

    /**
     * @return void
     */
    public function saveAll(): void
    {
        foreach ($this->writableDocs as $document) {
            $document->save();
        }
    }
}
