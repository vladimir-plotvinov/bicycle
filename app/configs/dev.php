<?php

// Const for DataBase
const DB_NAME = 'admindoc';
const DB_USER = 'root';
const DB_PASSWORD = 'root';
const DB_HOST = 'localhost';

// Const for project
const PATH_CONFIG = 'helpers/config.php';
const PATH_HELPERS = 'helpers/';
const PATH_CONTROLLER = 'controllers/';
const PATH_VIEW = 'views/';
const PATH_MODEL = 'models/';


// Allowed map urls
$this->allowedMap = [
    ''      => 'app\controllers\IndexController',
    'roles' => 'app\controllers\RolesController',
    'user'  => 'app\controllers\UserController',
];

$this->layout = 'layout/default';