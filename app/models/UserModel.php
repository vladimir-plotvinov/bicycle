<?php

namespace app\models;

use bicycle\helpers\DbConnect as DbConnect;
use bicycle\models\UserModelInterface as UserModelInterface;

class UserModel implements UserModelInterface {
    private $db;

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

    public function getByEmail($email)
    {
        $query = 'SELECT * FROM user WHERE email="' . $email . '";';

        return $this->db->getResult($query);
    }
}
