<?php

namespace app\models;

use bicycle\helpers\DbConnect as DbConnect;

class UserModel extends DbConnect {
    public $db;

    public function __construct()
    {
        $this->db = DbConnect::getInstance();
    }

    public function getAll() {
        $query = 'SELECT * FROM user;';

        return $this->db->getResult($query);
    }

    public function getById($id) {
        $query = 'SELECT * FROM user WHERE id=' . $id . ';';

        return $this->db->getResult($query);
    }
}
