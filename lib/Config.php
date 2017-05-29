<?php

namespace wt\lib;

class Config
{
	public static function getConfig($code)
	{
		try {
			$path = $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
			$config = require $path;
		} catch (Exception $e) {
			echo $e->getMessage();
		}

		return $config[$code];
	}
}