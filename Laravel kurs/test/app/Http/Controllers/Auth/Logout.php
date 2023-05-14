<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Logout extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/welcome'); // Przekierowanie na stronę główną lub inną stronę po wylogowaniu
    }
}
