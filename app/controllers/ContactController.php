<?php

namespace App\Controllers;

use App\Core\App;

class ContactController
{
    /**
     * Get the contact page.
     */
    public function index()
    {
        return view('contact');
    }
}
