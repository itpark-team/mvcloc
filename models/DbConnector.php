<?php


class DbConnector
{
    public static function getConnection(): mysqli
    {
        $mysqli = new mysqli("localhost", "root", "root", "mvc.loc");

        $mysqli->set_charset("utf8");

        return $mysqli;
    }
}