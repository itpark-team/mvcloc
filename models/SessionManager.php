<?php

class SessionManager
{
    public static function getValue($key)
    {
        return $_SESSION[$key];
    }

    public static function setValue($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    public static function deleteValue($key)
    {
        $_SESSION[$key] = null;
    }

    public static function clear()
    {
        $_SESSION = array();
    }
}
