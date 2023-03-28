<?php

namespace App\SingleResponsibility\After;

/**
 * Solve the problem by moving the behavior related to printing timesheet reports into a separate class.
 * This change lets you move other report-related stuff to the new class.
 *
 * AFTER: the extra behavior is in its own class.
 */
class Employee
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
