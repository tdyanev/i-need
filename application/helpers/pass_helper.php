<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('create_password')) {
    function create_password(string $password) {

        return password_hash($password, PASSWORD_BCRYPT, [
            'cost' => 10,
        ]);
    }
}
