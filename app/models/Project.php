<?php

namespace wt\app\models;

class Project
{
    protected $id;
    protected $name;
    protected $plannedTime;
    protected $spendedTime;

    public function __construct()
    {
        die('Hi.');
    }

    protected function getPlannedTime() {}

    protected function getSpendedTime() {}

    protected function loadData($date) {}

    protected function countRemainTime() {}
}