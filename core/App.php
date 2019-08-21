<?php

namespace App\Core;

class App
{
    protected static $bindings = [];

    public static function bind($key, $value)
    {
        self::$bindings[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, self::$bindings)) {
            throw new \Exception("The {$key} is not bound to the container.");
        }

        return self::$bindings[$key];
    }
}
