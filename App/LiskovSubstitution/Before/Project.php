<?php

namespace App\LiskovSubstitution\Before;

/**
 * Let’s look at an example of a hierarchy of document classes that violates the substitution principle.
 *
 * BEFORE: saving doesn’t make sense in a read-only document, so the subclass tries to solve it by resetting the base behavior in the overridden method.
 */
class Project
{
    /**
     * @param array<Document> $documents
     */
    public function __construct(protected array $documents)
    {
    }

    /**
     * @return void
     */
    public function openAll(): void
    {
        foreach ($this->documents as $document) {
            $document->open();
        }
    }

    /**
     * @return void
     */
    public function saveAll(): void
    {
        foreach ($this->documents as $document) {
            if (!$document instanceof WritableDocument) {
                $document->save();
            }
        }
    }
}
