<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Tạo file resources/views/auth/login.blade.php
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'tuky2903@gmail.com',
            'password' => '123123123'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard'); // Điều hướng sau khi đăng nhập
        }

        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
