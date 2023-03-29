<?php

namespace App\DependencyInversion\Before;

use App\DependencyInversion\After\Database;

/**
 * In this example, the high-level budget reporting class uses a low-level database class for reading and persisting its data.
 * This means that any change in the low-level class, such as when a new version of the database server gets released,
 * may affect the high-level class, which isn’t supposed to care about the data storage details.
 *
 * BEFORE: a high-level class depends on a low-level class.
 */
class BudgetReport
{
    /**
     * @var MySQLDatabase
     */
    private MySQLDatabase $database;

    /**
     * @param MySQLDatabase $database
     */
    public function setDatabase(MySQLDatabase $database): void
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
