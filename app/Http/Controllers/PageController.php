<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('public.index');
    }
    public function loginForm()
    {
        if (Auth::check()) {
            return redirect()->route('navPage');
        }
        return view('public.login');
    }
    public function register()
    {
        return view('navPage.register');
    }
    public function userList()
    {
        $userList = User::all();
        return view('navPage.userList', compact('userList'));
    }
    public function editUserForm($email)
    {
        $user = User::where('email', $email)->first();
        if (is_null($user)) {
            return redirect()->back()->with('error', 'User not found.');
        }
        return view('navPage.editUser', compact('user'));
    }
    public function navPage() {
        return view('navPage.navPage');
    }
    public function dashboard() {
        return view('navPage.dashboard');
    }
    public function barangForm() {
        return view('navPage.inputBarang');
    }
}
