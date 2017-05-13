<?php

namespace wt\app\models;

use wt\lib\AbstractModelClass as AbstractModelClass;

class Project extends AbstractModelClass
{
    protected $id;
    protected $name;
    protected $plannedTime;
    protected $spendedTime;

    protected function getPlannedTime() {}

    protected function getSpendedTime() {}

    protected function loadData($date) {}

    protected function countRemainTime() {}
}