<?php

namespace App\DependencyInversion\After;

interface Database
{
    public function insert();

    public function update();

    public function delete();
}