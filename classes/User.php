<?php

class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $username;
    public $password;
    public $profile_picture;
    public $role;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}