<?php

namespace bicycle\controllers;

use bicycle\Config as Config;
use bicycle\helpers\Router as Router;

/**
 * FrontController including needed controller depending on response from Router
 */
class FrontController
{
    /**
     * @var {class} $router [Instance class router]
     * @var {class} $controller [Compare with url and controller
     * @var {array} $compareController [Compare with url and controller
     * @var {string} $parseUrl [Get url from router]
     * @var {class} $config [instance global config]
     * @var {bool} $logged [logged user or not]
     */
    private $router;
    private $controller;
    private $compareController;
    private $parseUrl;
    private $config;

    public function __construct()
    {
        $this->config = Config::getInstance();
        $this->router = Router::getInstance();
        $this->compareController = $this->config->get('allowedmap');
    }

    /**
     * start [Point of occurrence. Initialization Router and call dispath]
     * @return {void}
     */
    public function start()
    {
        $this->parseUrl = $this->router->getUrl();
        $this->dispatch();
    }

    /**
     * dispatch [Create instance and call start controller]
     * @return {void}
     */
    private function dispatch()
    {
        if ($this->compareController == '') {
            # Need routing to 404 page and (Use controller with model?)
        }

        if ($this->config->logged == false && $this->parseUrl != trim($this->config->loginUrl, '/')) {
           $this->router->redirectTo($this->config->loginUrl);
        }

        $this->pathToController = $this->compareController[$this->parseUrl];
        $this->controller =  new $this->pathToController();
        $this->controller->start();
    }
}
?>