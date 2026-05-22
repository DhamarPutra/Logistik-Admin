<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ], [
            'username.required' => 'Username Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('navPage');
        } else {
            return redirect('loginForm')->withErrors('Username Dan Password Salah!');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('loginForm');
    }
}
