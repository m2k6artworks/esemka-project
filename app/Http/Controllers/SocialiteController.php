<?php

namespace esemka\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\SocialAccount;
use App\User;

class SocialiteController extends Controller
{
    public Function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }
    
    public Function handleProviderCallback(){
        try{
            $user = Socialite::driver('google')->User();
        }catch(Exception $e){
            return redirect('/login');
        }
        
        $authUser = $this->findOrCreateUser($user, 'google');
        
        
        Auth::login($authUser, true);
        
        return redirect('/dashboard');
    }
    
    public function findOrCreateUser($socialUser){
        $date = date('Y-m-d H:i:s');
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
                       ->where('provider_name', 'google')
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
            }
            
            $user->socialAccount()->create([
                'provider_id' => $socialUser->getId(),
                'provider_name' => 'google'
            ]);
            
            return $user;
        }
    }
}
