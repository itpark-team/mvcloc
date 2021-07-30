<?php

require_once './models/entities/User.php';
require_once './models/DbConnector.php';

class TableUsers
{
    public function getAll(): array
    {
        $db = DbConnector::getConnection();

        $queryResult = $db->query("SELECT * FROM `users`");

        $users = array();
        while ($row = $queryResult->fetch_assoc()) {
            $user = new User(
                $row["id"],
                $row["name"],
                $row["login"],
                $row["password"]
            );

            array_push($users, $user);
        }

        return $users;
    }

    public function getById($id): User
    {
        $db = DbConnector::getConnection();

        $queryResult = $db->query("SELECT * FROM `users` WHERE `id` = {$id}");

        if ($queryResult->num_rows == 0) {
            throw new Exception("User with id = {$id} not found");
        } else {
            $row = $queryResult->fetch_assoc();
            $user = new User(
                $row["id"],
                $row["name"],
                $row["login"],
                $row["password"]
            );
            return $user;
        }
    }
}