<?php

namespace app\controllers;

use app\models\RolesModel as RolesModel;
use bicycle\controllers\BaseController as BaseController;
use bicycle\ViewConstructor\View as View;

/**
* Roles Controller
*/
class RolesController extends BaseController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new RolesModel();
        $this->view = new View('roles');
    }

    public function start()
    {
        $allRoles = $this->model->getAll();

        $this->setView();
    }

    private function setView()
    {
        $this->view->render();
    }
}