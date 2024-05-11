<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::where('email', $credentials['email'])->first();

        if (!Auth::attempt($credentials)) {
            return $this->formatResponse('Unauthorized', json_decode('{}'), 401);
        }

        return $this->formatResponse('Authenticated', ['token' => $user->encodeToken()]);
    }
    public function redirect()
    {

        
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
         $user = Socialite::driver('facebook')->user();
         
         

        $user = User::firstOrCreate([
            'email' => $user->getEmail(),

        ],[
            'name' => $user->getName(),

        ]);

         auth()->login($user);

         return redirect()->to('/home');

    }
}
