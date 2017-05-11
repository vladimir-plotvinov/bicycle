<?php

namespace bicycle;

use bicycle\controllers\FrontController as FrontController;
use bicycle\Config as Config;

/**
* Start project
*/
class StartProject
{
    private $config;
    private $dispatcher;

    function __construct()
    {
        $this->config = Config::getInstance();
        $this->dispatcher = new FrontController();
    }

    public function init()
    {
        $this->config->assignVariables();
        $this->dispatcher->start();
    }
}

