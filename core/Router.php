<?php

namespace App\Core;

class Router
{
    public function view($name)
    {
        return require "app/views/{$name}.view.php";
    }
}
