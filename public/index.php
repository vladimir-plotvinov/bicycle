<?php

define('PATH_ROOT', explode('/public', $_SERVER['DOCUMENT_ROOT'])[0]);
define('PATH_APP', '/app/');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once(PATH_ROOT . '/bicycle/autoloader.php');

use bicycle\Config as Config;
use bicycle\StartProject as StartProject;

$config = Config::getInstance();
$config->assignVariables();

$start = new StartProject();
$start->init();