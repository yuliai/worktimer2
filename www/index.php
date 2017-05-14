<?php

require_once __DIR__ . '/../vendor/autoload.php';

$toggl = new \wt\app\models\Toggl();

var_dump($toggl->getTogglReports());