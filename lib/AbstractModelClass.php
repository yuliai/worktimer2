<?php

namespace wt\lib;

abstract class AbstractModelClass
{
    protected function getConfig()
    {
        try {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';
            $config = require $path;
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $config[$this->getShortClassName()];
    }

    protected function getShortClassName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}