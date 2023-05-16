<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyAccount extends Controller
{
    public function index()
    {
        $user = Auth::user();
        #dd($user);

        return view('my-account', compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();

        return view('edit-profile', compact('user'));
    }
    public function save(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['nullable','string', 'max:255', 'unique:users,username,'.$user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'old_password' => ['nullable', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    $fail('Obecne hasło jest nieprawidłowe.');
                }
            }],
            'new_password' => ['nullable', 'confirmed', 'min:8'],
        ]);
        
    
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
    
        $newPassword = $request->input('new_password');
        if (!empty($newPassword)) {
            $user->password = Hash::make($newPassword);
        }
    
        $user->save();

        return redirect()->route('my-account');
    }
}
