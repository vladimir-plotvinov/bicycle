<?php

namespace bicycle\ViewConstructor;

use bicycle\Config as Config;

/**
* View Constructor
*/
class View
{
    public $layout;
    private $config;

    function __construct()
    {
        $this->config = Config::getInstance();
        $this->layout = $this->config->layout;
    }

    /**
     * Render template, returning content.
     * @param {array} $data variable for view.
     * @return {string} Compile content.
     */
    public function render($variable = [])
    {
        extract($variable);

        ob_start();
        include( PATH_ROOT . PATH_APP . PATH_VIEW . $this->layout . '.phtml');
        $content = ob_get_contents();
        ob_end_clean();

        echo $content;
    }
}