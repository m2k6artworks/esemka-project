<?php

namespace esemka\Http\Controllers\Auth;

use Illuminate\Http\Request;
use esemka\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use esemka\SocialAccount;
use esemka\User;

class SocialiteController extends Controller
{
    public Function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }
    
    public Function handleProviderCallback($provider){
        try{
            $user = Socialite::driver($provider)->user();
        }catch(Exception $e){
            return redirect('/');
        }
        
        $socialAccount = SocialAccount::where('provider_id', $user->getId())
                       ->where('provider_name', $provider)
                       ->first();
        
        if ($socialAccount) {
            Auth::login($socialAccount->user, true);
        }else{
            return redirect('/belum-terdaftar');
        }
        
        if(Auth::user()->hasRole('user')){
            return redirect('/siswa');
        }elseif (Auth::user()->hasRole('bkk')) {
            return redirect('/bkk');
        }

        return redirect("opoki");
    }
    
    public function findOrCreateUser($socialUser, $provider){
        $date = date('Y-m-d H:i:s');
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
                       ->where('provider_name', $provider)
                       ->first();
        
        if($socialAccount){
            return $socialAccount->user;
        } else{
            $user = User::where('email', $socialUser->getEmail())->first();
            
            if(! $user){
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'email_verified_at' => $date
                ]);
                $user->assignRole('user');
            }
            
            $user->socialAccount()->create([
                'provider_id' => $socialUser->getId(),
                'provider_name' => $provider
            ]);
            
            return $user;
        }
    }
}