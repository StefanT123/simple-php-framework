<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->getAll('users');

        return view('user', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ]);

        return redirect('user');
    }
}
