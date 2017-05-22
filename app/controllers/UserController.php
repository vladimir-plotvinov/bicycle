<?php

namespace app\controllers;

use app\models\UserModel as UserModel;
use bicycle\controllers\BaseController as BaseController;
use bicycle\ViewConstructor\View as View;

/**
* User Controller
*/
class UserController extends BaseController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new View();
    }

    public function start()
    {
        $allUser = $this->model->getAll();

        $this->setView();
    }

    private function setView()
    {
        $this->view->render();
    }
}