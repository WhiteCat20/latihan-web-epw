<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login-register.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'unique:users'],
            'name' => ['required'],
            'password' => ['required'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login');
    }
}
