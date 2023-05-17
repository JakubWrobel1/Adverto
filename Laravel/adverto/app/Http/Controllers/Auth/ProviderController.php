<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {   
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {   
        $SocialUser = Socialite::driver($provider)->user();
        $user = User::updateOrCreate([
            'provider_id' => $SocialUser->id,
            'provider' => $provider
        ], [
            'name' => $SocialUser->name,
            'email' => $SocialUser->email,
            'provider_token' => $SocialUser->token,
        ]);
         
       
        Auth::login($user);
        
      if ($user->password === null) {
            return view('set-password-form');
            ;
        }
        return redirect('/welcome');
        
        
    }
    public function showSetPasswordForm()
    {
        return view('set-password-form');
    }
    public function setPassword(Request $request)
    {
        $user = Auth::user();
        #dd($user);

        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->password = Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect('/welcome');
    }
}