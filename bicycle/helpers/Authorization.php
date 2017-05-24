<?php

namespace bicycle\helpers;

use bicycle\Config as Config;
use bicycle\helpers\DbConnect as DbConnect;

/**
 * Authorization helper for login.
 */
class Authorization
{
    public $email;
    public $password;
    public $userModel;
    private $user;
    private $config;
    private $db;

    public function __construct()
    {
        $this->db = DbConnect::getInstance();
        $this->config = Config::getInstance();
    }

    public function start()
    {
        $this->password = md5($this->password);
        $this->user = $this->userModel->getByEmail($this->email);

        $this->checkAuthorization();
    }

    public function checkAuthorization()
    {
        if ($this->user['email'] == $this->email) {
            if ($this->user['password'] == $this->password) {
                $this->startSession();
            } else {
                echo "User not find in database 2";
            }
        } else {
            echo "User not find in database";
        }
    }

    private function startSession()
    {
        session_start([
            'cookie_lifetime' => 3600
        ]);

        $this->config->logged = true;
    }
}
?>