<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        #dd($user);
        $users = User::select('id', 'name', 'email', 'is_admin')->get();

        return view('users', compact('users'));

    }
    public function userSearch(Request $request)
{
    $query = $request->input('query');

    $users = User::where('name', 'like', "%$query%")
                ->orWhere('email', 'like', "%$query%")
                ->get();

    return view('users', compact('users'));
}
public function userEdit(User $user)
{
    return view('edit', compact('user'));
}
public function userUpdate(Request $request, User $user)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);

    return redirect()->back()->with('success', 'Advertisement added successfully.');
}

}