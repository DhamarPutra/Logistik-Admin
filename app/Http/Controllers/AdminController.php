<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|regex:/^[a-z0-9.\_]+$/|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,supervisor,basic',
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'username.required' => 'Username Wajib Diisi',
            'username.regex' => 'Username Hanya Bisa (a-z | 0-9 | . | _)',
            'username.unique' => 'Username Sudah Digunakan',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Tidak Valid',
            'email.unique' => 'Email Sudah Digunakan',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password Minimal 8 Karakter',
            'password.confirmed' => 'Password Tidak Cocok'
        ]);
        $request = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        return redirect()->back()->with('success', 'User Added successfully.');
    }
    public function deleteUser($email)
    {
        $userList = User::where('email', $email);
        if (!$userList) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $userList->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    public function editUser($email, Request $request)
    {
        $user = User::where('email', $email)->first();
        if (is_null($user)) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-z0-9.\_]+$/',
                Rule::unique('users')->ignore($user->id),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'old_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
            'role' => 'required|string|in:admin,supervisor,basic',
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'username.required' => 'Username Wajib Diisi',
            'username.regex' => 'Username Hanya Bisa (a-z | 0-9 | . | _)',
            'username.unique' => 'Username Sudah Digunakan',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Tidak Valid',
            'email.unique' => 'Email Sudah Digunakan',
            'new_password.required' => 'Password Wajib Diisi',
            'new_password.min' => 'Password Minimal 8 Karakter',
        ]);
        if (!Hash::check($request->input('old_password'), $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password does not match our records.']);
        }
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->new_password),
            'role' => $request->role
        ]);
        return redirect()->route('userList')->with('success', 'User edited successfully.');
    }
}
