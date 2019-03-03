<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth;
use App\User;

class SocialAuthController extends Controller
{
    //90
    public function redirectToProvider()
    {
    	return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
//     	 $user = Socialite::driver('github')->user();
//     	 $token = $user->token;
// 		$refreshToken = $user->refreshToken; // not always provided
// 		$expiresIn = $user->expiresIn;

// // OAuth One Providers
// 		$token = $user->token;
// 		$tokenSecret = $user->tokenSecret;

// 		// All Providers
// 		$user->getId();
// 		$user->getNickname();
// 		$user->getName();
// 		$user->getEmail();
// 		$user->getAvatar();
    	try {
            $user = Socialite::driver('github')->user();

        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
        // if(explode("@", $user->email)[1] !== 'company.com'){
        //     return redirect()->to('/');
        // }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);

        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect('/home');
    }

    	//get the user


    	//store user info
    	
    
}
