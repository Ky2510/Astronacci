<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback() {
        $user = Socialite::driver('facebook')->user();
        $findUser = User::where('facebook_id', $user->id)->first();

        if ($findUser) {
            Auth::login($findUser);
            return redirect()->intended('home');
        } else {
            $user = User::updateOrCreate([
                'email' => $user->email,
            ],[
                'name' => $user->name,
                'facebook_id' => $user->id,
                'password' => encrypt("password")
            ]);
            Auth::login($user);
        }
        return redirect()->intended('home');
    }
}
