<?php

namespace app\controllers;

use app\models\RolesModel as RolesModel;
use bicycle\controllers\BaseController as BaseController;
use bicycle\ViewConstructor\View as View;

/**
* Index Controller
*/
class IndexController extends BaseController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function start()
    {
        // $allRoles = $this->model->getAll();

        $this->setView();
    }

    private function setView()
    {
        $this->view->render();
    }
}