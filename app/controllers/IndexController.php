<?php

namespace app\controllers;

use bicycle\controllers\BaseController as BaseController;

/**
* Index Controller
*/
class IndexController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = 'home';
    }

    public function start()
    {
        var_dump($this->model);
    }
}