<?php

namespace bicycle\models;

interface UserModelInterface {

    // Find user by Email. Need return all data for user.
    public function getByEmail($email);
}
