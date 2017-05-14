<?php

namespace wt\app\models;

use wt\lib\AbstractModelClass as AbstractModelClass;
use MorningTrain\TogglApi\TogglApi as ToggleAPI;
use MorningTrain\TogglApi\TogglReportsApi as ToggleReportsAPI;

class Toggl extends AbstractModelClass
{
    protected $toggl;
    protected $config;
    protected $defaultAccount;

    public function __construct()
    {
        $this->config = $this->getConfig();
        $this->defaultAccount = $this->config['default']['account'];
    }

    public function getToggl()
    {
        if (!$this->toggl) {
            $this->toggl = new ToggleAPI($this->getApiToken());
        }
        return $this->toggl;
    }

    public function getTogglReports()
    {
        if (!$this->toggl) {
            $this->toggl = new ToggleReportsAPI($this->getApiToken());
        }
        return $this->toggl;
    }

    protected function getApiToken()
    {
        return $this->config['account'][$this->defaultAccount]['api_token'];
    }
}