<?php

namespace app\controllers;

use bicycle\helpers\Authorization as Authorization;
use bicycle\controllers\BaseController as BaseController;
use bicycle\ViewConstructor\View as View;
use app\models\UserModel as UserModel;

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
        $this->authorization = new Authorization();
    }

    public function start()
    {
        if (isset($_POST['submit'])) {
            $this->authorization->email = $_POST['email'];
            $this->authorization->password = $_POST['password'];
            $this->authorization->userModel = new UserModel();

            $this->authorization->start();
        }

        $this->setView();
    }

    private function setView()
    {
        if (!empty($_SESSION['user'])) {
            $this->view->layout = 'layouts/default';

            $data = array(
                'page' => 'roles',
                'title' => 'Roles View',
                'static' => 'roles',
                'user'  => $_SESSION['user'],
            );

            // REDIRECT TO ADMIN ULR!!!
        }
        else {
            $this->view->layout = 'layouts/login';

            $data = array(
                'page' => 'login',
                'title' => 'Please login or Register',
                'static' => 'login',
            );
        }

        $this->view->render($data);
    }
}