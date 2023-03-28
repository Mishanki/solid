<?php

namespace App\SingleResponsibility\After;

class TimeSheetReport
{
    /**
     * @param Employee $employee
     *
     * @return void
     */
    public function printTimeSheetReport(Employee $employee): void
    {
        print_r([
            'user_name' => $employee->getName(),
            'report_data' => 'some-data',
            'time' => time(),
        ]);
    }
}