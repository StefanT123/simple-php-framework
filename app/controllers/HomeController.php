<?php

namespace App\Controllers;

use App\Core\App;

class HomeController
{
    /**
     * Get the home page.
     */
    public function index()
    {
        return view('home');
    }
}
