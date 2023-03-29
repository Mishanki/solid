<?php

namespace App\DependencyInversion\After;

/**
 * You can fix this problem by creating a high-level interface that describes read/write operations and making the reporting class use that interface instead of the low-level class.
 * Then you can change or extend the original low-level class to implement the new read/write interface declared by the business logic.
 *
 * AFTER: low-level classes depend on a high-level abstraction.
 */
class BudgetReport
{
    /**
     * @var Database
     */
    private Database $database;

    /**
     * @param Database $database
     */
    public function setDatabase(Database $database): void
    {
        $this->database = $database;
    }

    /**
     * @param string $date
     *
     * @return void
     */
    public function open(string $date)
    {
    }

    /**
     * @return void
     */
    public function save(): void
    {
        $this->database->insert();
    }
}
