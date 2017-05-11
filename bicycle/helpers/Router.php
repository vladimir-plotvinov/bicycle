<?php

namespace bicycle\helpers;

class Router
{
    private $currentUrl;
    static private $_instance = NULL;

    static public function getInstance()
    {
        if (self::$_instance != NULL) {
            return self::$_instance;
        }

        return self::$_instance = new self();
    }

    private function __construct()
    {

    }

    private function redirectTo($url)
    {
        header("HTTP/1.1 301 Moved Permanently");
        header('Location: ' . 'https://' . $_SERVER['SERVER_NAME'] . $url);
        exit();
    }

    private function checkValidationUrl()
    {
        if (preg_match("/.css|.js|.jpg|.png/", $this->currentUrl)) {
            exit();
        }

        if (substr($this->currentUrl, -1) != '/' && strlen($this->currentUrl) > 1) {
            $this->redirectTo($this->currentUrl . '/');
        }
    }

    public function getUrl()
    {
        $this->currentUrl = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

        $this->checkValidationUrl();

        return trim($this->currentUrl, '/');
    }
}