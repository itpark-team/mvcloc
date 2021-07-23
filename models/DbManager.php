<?php

require_once './models/tables/Users.php';

class DbManager{
    public $Users;

    public function __construct()
    {
        $this->Users = new Users();
    }
}