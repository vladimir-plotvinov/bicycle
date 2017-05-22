<?php

namespace app\models;

use bicycle\helpers\DbConnect as DbConnect;

class IndexModel {
    public $db;

    public function __construct()
    {
        $this->db = DbConnect::getInstance();
    }

    public function getAll() {
        $query = 'SELECT * FROM roles;';

        return $this->db->getResult($query);
    }

    public function getByName($name) {
        $query = 'SELECT * FROM user WHERE name=' . $name . ';';

        return $this->db->getResult($query);
    }
}
