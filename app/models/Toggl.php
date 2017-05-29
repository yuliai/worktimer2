<?php

namespace wt\app\models;

use wt\lib\Config as Config;
use MorningTrain\TogglApi\TogglApi as ToggleAPI;
use MorningTrain\TogglApi\TogglReportsApi as ToggleReportsAPI;

class Toggl
{
	protected $code = 'toggl';
	protected $toggl;
	protected $config;
	protected $defaultAccount;

	public function __construct()
	{
		$this->config = Config::getConfig($this->code);
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