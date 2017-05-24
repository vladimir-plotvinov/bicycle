<?php

set_include_path(
    get_include_path()
    . PATH_SEPARATOR . PATH_ROOT . PATH_APP . '/views/'
    . PATH_SEPARATOR . PATH_ROOT . PATH_APP . '/models/'
    . PATH_SEPARATOR . PATH_ROOT . PATH_APP . '/controllers/'
    . PATH_SEPARATOR . PATH_ROOT . '/bicycle/ViewConstructor/'
    . PATH_SEPARATOR . PATH_ROOT . '/bicycle/controllers/'
    . PATH_SEPARATOR . PATH_ROOT . '/bicycle/helpers/'
    . PATH_SEPARATOR . PATH_ROOT . '/bicycle/models/'
    . PATH_SEPARATOR . PATH_ROOT . '/bicycle/'
);

function autoloader($class)
{
    $parts = explode('\\', $class);
    require_once(end($parts) . '.php');
}

spl_autoload_extensions();
spl_autoload_register('autoloader');