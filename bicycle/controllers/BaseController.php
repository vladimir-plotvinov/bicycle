<?php

namespace bicycle\controllers;

use bicycle\helpers\Config as Config;

/**
* Base Controller
*/
class BaseController
{
    private $config;

    function __construct()
    {
        $config = Config::getInstance();
    }

    public function render()
    {

    }
}