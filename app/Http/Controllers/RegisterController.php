<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
        ], [
            'required' => 'The :attribute field is required',
            'password.min' => 'The :attribute must be at least 6 characters.',
            'username.min' => 'The :attribute must be at least 3 characters.',
            'email.email' => 'The :attribute must be a valid email address.',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $cekRegister = User::create($validateData);
        $sessionflash = $cekRegister ? 'Register Succesfully' : 'Register Filed';
        return redirect('/login')->with('success', $sessionflash);
    }
}
