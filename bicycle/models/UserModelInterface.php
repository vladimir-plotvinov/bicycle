<?php

namespace bicycle\models;

interface UserModelInterface {

    // Find user by Email. Return all data for user.
    public function getByEmail($email);
}
