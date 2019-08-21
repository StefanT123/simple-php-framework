<?php

namespace App\Controllers;

use App\Core\App;

class AboutController
{
    /**
     * Get the about page.
     */
    public function index()
    {
        return view('about');
    }
}
