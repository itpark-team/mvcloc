<?php

require_once './models/entities/User.php';

class Users{
    public function getAll(): array
    {
        return array(
          new User(1,"Иван","ivan","123"),
          new User(2,"Данило","dan","123"),
          new User(3,"Болван","bolvan","123"),
          new User(4,"Пётр","petr","123"),
        );
    }
}