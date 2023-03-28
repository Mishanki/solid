<?php

namespace App\SingleResponsibility\Before;

/**
 * The Employee class has several reasons to change.
 * The first reason might be related to the main job of the class: managing employee data.
 * However, there’s another reason: the format of the timesheet report may change over time, requiring you to change the code within the class.
 *
 * BEFORE: the class contains several different behaviors.
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

    /**
     * @return void
     */
    public function printTimeSheetReport(): void
    {
        print_r([
            'user_name' => $this->getName(),
            'report_data' => 'some-report-data',
            'time' => time(),
        ]);
    }
}