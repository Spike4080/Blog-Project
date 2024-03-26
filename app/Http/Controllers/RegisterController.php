<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('/register.create');
    }
    public function store()
    {
        request()->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $user = new User;
        $user->name = request('name');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();

        return redirect('/');
    }
}
