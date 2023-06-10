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
        $users = User::select('id', 'name', 'username','email', 'is_admin')->get();

        return view('users', compact('users'));

    }
    public function userSearch(Request $request)
{
    $query = $request->input('query');

    $users = User::where('name', 'like', "%$query%")
                ->orWhere('email', 'like', "%$query%")
                ->orWhere('username', 'like', "%$query%")
                ->get();

    return view('result', compact('users'));
}
public function userEdit(User $user)
{
    return view('edit', compact('user'));
}

public function userDelete(User $user)
{
    $user->delete();
    return redirect('users');
}
public function userUpdate(Request $request, User $user)
{
    $request->validate([
        'name' => 'required',
        'username' => 'nullable|unique:users,username,' . $user->id,'phone_number' => 'nullable|unique:users,phone_number,'.$user->id,
        'email' => 'required|unique:users,email,' . $user->id
    ]);

    $user->update([
        'name' => $request->input('name'),
        'username' => $request->input('username'),
        'phone_number' => $request->input('phone_number'),
        'email' => $request->input('email'),
    ]);
    return redirect('users');
}

} 
