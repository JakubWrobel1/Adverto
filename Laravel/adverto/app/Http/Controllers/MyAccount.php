<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;

class MyAccount extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('my-profile', compact('user'));
    }
    
    public function edit()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    public function save(Request $request)
    {
        try {
            $user = Auth::user();
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
                'phone_number' => ['string', 'max:12', 'nullable', 'unique:users,phone_number,'.$user->id],
                'old_password' => ['nullable', function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Obecne hasło jest nieprawidłowe.');
                    }
                }],
                'new_password' => ['nullable', 'confirmed', 'min:8'],
            ]);
            
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone_number = $request->input('phone_number');

            $newPassword = $request->input('new_password');
            if (!empty($newPassword)) 
            {
                $user->password = Hash::make($newPassword);
            }
            
            $user->save();
    
            return redirect()->route('my-account');
        } catch (ValidationException $exception) {
            if ($exception->errors()['phone_number']) {
                $errors = ['phone_number' => 'Numer telefonu jest już zajęty.'];
                throw ValidationException::withMessages($errors);
            }
            throw $exception;
        } catch (QueryException $exception) {
            if ($exception->getCode() === '23000') {
                $errors = ['phone_number' => 'Numer telefonu jest już zajęty.'];
                throw ValidationException::withMessages($errors);
            }
            throw $exception;
        }
    }  
    public function setPasswordForm()
    {
        return view('set-password');
    }
}
