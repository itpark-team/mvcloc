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
}