<?php

namespace bicycle;

/**
* CONFIG
*/
class Config
{
    static private $_instance = NULL;
    public $allowedMap;

    static public function getInstance()
    {
        if (self::$_instance != NULL) {
            return self::$_instance;
        }

        return self::$_instance = new self();
    }

    private function __construct() {}

    public function assignVariables()
    {
        if ($_SERVER['ENVIRONMENT'] == 'dev') {
            require_once(PATH_ROOT . PATH_APP . 'configs/dev.php');
        }
    }

    public function get($query)
    {
        if ($query == 'allowedmap') {
            return $this->allowedMap;
        }
    }
}