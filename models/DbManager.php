<?php

require_once './models/tables/TableUsers.php';

class DbManager{
    public $Users;

    public function __construct()
    {
        $this->Users = new TableUsers();
    }
}