<?php

namespace App;

use Illuminate\Database\Eloquent\Model as ModelMain;

class Model extends ModelMain
{
    public static function sessionInit()
    {
        @session_start();
    }

    public static function sessionSet($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function sessionGet($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function getBasketCookie()
    {

        if (isset($_COOKIE['basket'])) {
            $cookie = $_COOKIE['basket'];
        } else {
            $expire = time() + (7 * 24 * 3600);
            $value = time();
            setcookie('basket', $value, $expire, '/');
            $cookie = $value;
        }
        return $cookie;
    }

}
