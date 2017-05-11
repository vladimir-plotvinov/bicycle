<?php

namespace bicycle\ViewConstructor;

/**
* View Constructor
*/
class View
{
    private $template;

    function __construct($template)
    {
        $this->template = $template;
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
        include( PATH_ROOT . PATH_APP . 'views/' . $this->template . '.phtml');
        $content = ob_get_contents();
        ob_end_clean();

        echo $content;
    }
}