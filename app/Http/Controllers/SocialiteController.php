<?php

namespace App\Http\Controllers;

use App\Services\SocialiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    protected $service;
    public function __construct(SocialiteService $service)
    {
        $this->service = $service;
    }


    public function redirect()
    {

        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        // dd($user);
        $user = $this->service->create($user);
        $user->assignRole('user');
        if (!Auth::login($user, true)) {
            return redirect()->route('login');
        }
        return redirect()->route('product.index');
    }
}
