<?php


class DbConnector
{
    public static function getConnection(): mysqli
    {
        $mysqli = new mysqli("127.0.0.1:3306", "root", "root", "mvc.loc");

        $mysqli->set_charset("utf8");

        return $mysqli;
    }
}