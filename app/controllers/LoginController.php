<?php

namespace app\controllers;

use bicycle\helpers\Authorization as Authorization;
use bicycle\controllers\BaseController as BaseController;
use bicycle\ViewConstructor\View as View;

/**
* Login Controller
*/
class LoginController extends BaseController
{
    private $view;
    private $authorization;

    function __construct()
    {
        $this->view = new View();
        $this->view->layout = 'layouts/login';

        $this->authorization = new Authorization();
    }

    public function start()
    {
        if ($_POST['submit']) {
            # Registration user, call method Authorization
        }

        $this->setView();
    }

    private function setView()
    {
        $data = array(
            'page' => 'login',
            'title' => 'Please login or Register',
            'static' => 'login',
        );

        $this->view->render($data);
    }
}