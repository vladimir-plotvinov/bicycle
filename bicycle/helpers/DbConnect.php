<?php

namespace bicycle\helpers;

class DbConnect {
    public $db;
    static private $_instance = NULL;

    static public function getInstance()
    {
        if (self::$_instance != NULL) {
            return self::$_instance;
        }

        return self::$_instance = new self();
    }

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->db->connect_error) {
            printf("Error connection database \n", $this->db->connect_error);
            exit();
        }
    }

    public function getResult($query)
    {
        $result = $this->db->query($query);
        $result = mysqli_fetch_array($result);

        return $result;
    }
}