<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Laravel\Socialite\Facades\Socialite;
use Throwable;
class ProviderController extends Controller
{
    public function redirect($provider)
    {   
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {   try{
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
        }
        return redirect('/welcome');
    }catch(Throwable $e){
        report($e);
        return view('/auth/login');
    } 
        
    }
    
    
    public function setPassword(Request $request)
    {   
        $user = Auth::user();
        $request->validate([
            'password_confirmation'=>['required'],
            'password' => ['required', 'confirmed', Password::defaults()]
            
        ]);
        
            $user->password = Hash::make($request->input('password'));
            $user->save();
             Auth::login($user);
            return redirect('/welcome');
     
        
        
    }
}